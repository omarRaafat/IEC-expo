<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'full_name' => 'required|string|max:100',
            'nationality' => 'required|string|max:50',
            'birth_date' => 'required|date_format:Y-m-d',
            'marital_status' => ['required', Rule::in(['single', 'married', 'divorced', 'widowed'])],
            'gender' => ['required', Rule::in(['male', 'female', 'other'])],
            'educational_qualification' => [
                'required',
                Rule::in(['high_school', 'bachelor', 'diploma', 'master', 'phd', 'other']),
            ],
            'specialization' => 'required|string|not_regex:/^[0-9]+$/|max:100',
            'english_proficiency' => [
                'required',
                Rule::in(['none', 'basic', 'intermediate', 'advanced', 'fluent']),
            ],
            'other_languages' => 'nullable|string|max:255',
            'company_name' => 'required|array',
            'company_name.*' => 'required|string', // Each company name must be a non-empty string
            'from_date' => 'required|array',
            'from_date.*' => 'required|date', // Each from_date must be a valid date
            'to_date' => 'required|array',
            'to_date.*' => 'required|date|after_or_equal:from_date.*', // Each to_date must be valid and after the corresponding from_date
            'position' => 'required|array',
            'position.*' => 'required|string', // Each position must be a non-empty string
            'responsibilities' => 'required|array',
            'responsibilities.*' => 'required|string', // Each responsibility must be a non-empty string
            'training_courses' => 'nullable|string',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',  // Assuming this stores the path to the CV
            'upload_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',  // Assuming this stores the path to the photo
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|unique:job_applications,email,' . $this->job, // For updates, use the job ID if available
        ];
    }


    public function messages(): array
    {
        return [
            'full_name.required' => 'Full name is required.',
            'full_name.max' => 'Full name must not exceed 100 characters.',
            'nationality.required' => 'Nationality is required.',
            'birth_date.required' => 'Please provide your birth date.',
            'birth_date.date' => 'The birth date must be a valid date.',
            'marital_status.required' => 'Marital status is required.',
            'marital_status.in' => 'The selected marital status is invalid.',
            'gender.required' => 'Please select your gender.',
            'gender.in' => 'The selected gender is invalid.',
            'educational_qualification.required' => 'Educational qualification is required.',
            'educational_qualification.in' => 'The selected educational qualification is invalid.',
            'specialization.required' => 'Specialization is required.',
            'specialization.max' => 'Specialization must not exceed 100 characters.',
            'specialization.not_regex' => 'The :attribute must not be a numeric value.',
            'english_proficiency.required' => 'Please select your level of English proficiency.',
            'english_proficiency.in' => 'The selected English proficiency level is invalid.',
            'work_experience.required' => 'Work experience is required.',
            'work_experience.json' => 'Work experience must be in JSON format.',
            'cv.file' => 'The uploaded file must be a valid file.',
            'cv.mimes' => 'The CV must be a PDF or Word document (PDF, DOC, DOCX).',
            'cv.max' => 'The CV must not exceed 2MB.',
            'upload_photo.required' => 'A photo is required.',
            'upload_photo.image' => 'The uploaded file must be an image.',
            'upload_photo.mimes' => 'The photo must be in one of the following formats: JPEG, PNG, JPG, GIF, SVG.',
            'upload_photo.max' => 'The photo must not exceed 1MB.',
            'phone_number.required' => 'Phone number is required.',
            'phone_number.max' => 'Phone number must not exceed 15 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'This email is already registered.',
            'company_name.required' => 'Company name is required.',
            'company_name.array' => 'Company name must be an array.',
            'company_name.*.required' => 'Each company name is required.',
            'company_name.*.string' => 'Each company name must be a valid string.',
            
            'from_date.required' => 'From date is required.',
            'from_date.array' => 'From date must be an array.',
            'from_date.*.required' => 'Each from date is required.',
            'from_date.*.date' => 'Each from date must be a valid date.',
            
            'to_date.required' => 'To date is required.',
            'to_date.array' => 'To date must be an array.',
            'to_date.*.required' => 'Each to date is required.',
            'to_date.*.date' => 'Each to date must be a valid date.',
            'to_date.*.after_or_equal' => 'The to date must be after or equal to the from date.',
            
            'position.required' => 'Position is required.',
            'position.array' => 'Position must be an array.',
            'position.*.required' => 'Each position is required.',
            'position.*.string' => 'Each position must be a valid string.',
            
            'responsibilities.required' => 'Responsibilities are required.',
            'responsibilities.array' => 'Responsibilities must be an array.',
            'responsibilities.*.required' => 'Each responsibility is required.',
            'responsibilities.*.string' => 'Each responsibility must be a valid string.',

        ];
    }
}
