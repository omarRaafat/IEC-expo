<?php

namespace App\Services;



use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;

class JobService
{

    public function getAllJobs()
    {
        // Logic to fetch all jobs from the database
        // Return the fetched jobs
    }

    public function createJobApplication(array $validatedData): JobApplication
    {
        // Handle file uploads and merge paths with validated data
        if (isset($validatedData['cv']) && $validatedData['cv'] instanceof UploadedFile) {
            $validatedData['cv'] = $validatedData['cv']->store('cvs', 'public');
        }

        if (isset($validatedData['upload_photo']) && $validatedData['upload_photo'] instanceof UploadedFile) {
            $validatedData['upload_photo'] = $validatedData['upload_photo']->store('photos', 'public');
        }

        // Prepare the work experience data for storage
        $workExperience = [];
        if (isset($validatedData['company_name'])) {
            foreach ($validatedData['company_name'] as $index => $companyName) {
                $workExperience[] = [
                    'company_name' => $companyName,
                    'position' => $validatedData['position'][$index] ?? null,
                    'from_date' => $validatedData['from_date'][$index] ?? null,
                    'to_date' => $validatedData['to_date'][$index] ?? null,
                    'responsibilities' => $validatedData['responsibilities'][$index] ?? null,
                ];
            }
        }
       

        // Convert the work experience data to JSON format
        $validatedData['work_experience'] = json_encode($workExperience, JSON_UNESCAPED_UNICODE);;
    // return $validatedData;
        // Create the Job entry in the database
        try{
            Log::info('Work Experience JSON:', ['work_experience' => $validatedData['work_experience']]);

         return JobApplication::create($validatedData);
       
         } catch (\Exception $e) {
            Log::error('store job application error : ' , [$e->getMessage()]);
     }
    }
}
