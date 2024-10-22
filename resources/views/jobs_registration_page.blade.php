@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        form {
            border-radius: 8px;
            border-color: #057a02;
        }

        .select2-container--default .select2-selection--single {
            height: 43px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 43px;
        }

        .select2-results__option:hover {
            color: green;
            cursor: pointer;
        }

        #g-recaptcha-response {
            display: block !important;
            position: absolute;
            margin: -78px 0 0 0 !important;
            width: 302px !important;
            height: 76px !important;
            z-index: -999999;
            opacity: 0;
        }
    </style>

    <main id="main">
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session()->get('error') }}</div>
        @endif

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ __('site.job_registration') }}</h2>
                    <ol>
                        <li><a href="{{ url('/') }}">{{ __('site.home') }}</a></li>
                        <li>{{ __('site.job_registration') }}</li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-8">
                        <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data"
                            class="php-email-form" style="border-color: black; font-weight: bold;">
                            @csrf

                            <div class="row">
                                <div class="form-group mt-3">
                                    <label class="custom-control-label" for="customRadioInline2">{{ __('site.name') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="full_name"
                                        placeholder="{{ __('site.name') }}" value="{{ old('full_name') }}" required
                                        style=" border-color: black; ">
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label" for="customRadioInline2">{{ __('site.phone') }}
                                        <span class="text-danger">*</span></label>

                                    <input type="text" class="form-control" name="phone_number"
                                        placeholder="{{ __('site.phone') }}" value="{{ old('phone_number') }}" required
                                        style=" border-color: black; ">
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label" for="customRadioInline2">{{ __('site.email') }}
                                        <span class="text-danger">*</span></label>

                                    <input type="email" class="form-control" name="email"
                                        placeholder="{{ __('site.email') }}" value="{{ old('email') }}" required
                                        style=" border-color: black; ">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label"
                                        for="customRadioInline2">{{ __('site.nationality') }} <span
                                            class="text-danger">*</span></label>
                                    <select class="js-example-basic-single custom-control-input form-control"
                                        placeholder="{{ __('site.nationality') }}" style="border-color: black;" required
                                        name="nationality" id="nationality">
                                        <option value="" disabled selected></option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('nationality') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label" for="customRadioInline2">{{ __('site.birthdate') }}
                                        <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="birth_date" required
                                        value="{{ old('birth_date') }}" style=" border-color: black; ">
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label"
                                        for="customRadioInline2">{{ __('site.marital_status') }} <span
                                            class="text-danger">*</span></label>

                                    <select class="form-control" name="marital_status" required
                                        style=" border-color: black; ">
                                        <option value="" disabled selected>{{__('site.select')}} {{ __('site.marital_status') }}
                                        </option>
                                        <option value="single" {{ old('marital_status') == 'single' ? 'selected' : '' }}>
                                            {{ __('site.single') }}</option>
                                        <option value="married" {{ old('marital_status') == 'married' ? 'selected' : '' }}>
                                            {{ __('site.married') }}</option>

                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label" for="customRadioInline2">{{ __('site.gender') }}
                                        <span class="text-danger">*</span></label>

                                    <select class="form-control" name="gender" required style=" border-color: black; ">
                                        <option value="" disabled selected>{{__('site.select')}} {{ __('site.gender') }}</option>
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>
                                            {{ __('site.male') }}</option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>
                                            {{ __('site.female') }}</option>
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label"
                                        for="customRadioInline2">{{ __('site.educational_qualification') }} <span
                                            class="text-danger">*</span></label>

                                    <select class="form-control" name="educational_qualification" required
                                        style=" border-color: black; ">
                                        <option value="" disabled selected>{{__('site.select')}}
                                            {{ __('site.educational_qualification') }}</option>
                                        <option value="high_school"
                                            {{ old('educational_qualification') == 'high_school' ? 'selected' : '' }}>
                                            {{ __('site.educational_qualification_1') }}</option>
                                        <option value="bachelor"
                                            {{ old('educational_qualification') == 'bachelor' ? 'selected' : '' }}>
                                            {{ __('site.educational_qualification_2') }}</option>
                                        <option value="diploma"
                                            {{ old('educational_qualification') == 'diploma' ? 'selected' : '' }}>
                                            {{ __('site.educational_qualification_3') }}</option>
                                        <option value="master"
                                            {{ old('educational_qualification') == 'master' ? 'selected' : '' }}>
                                            {{ __('site.educational_qualification_4') }}</option>
                                        <option value="phd"
                                            {{ old('educational_qualification') == 'phd' ? 'selected' : '' }}>
                                            {{ __('site.educational_qualification_5') }}</option>
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label"
                                        for="customRadioInline2">{{ __('site.specialization') }} <span
                                            class="text-danger">*</span></label>

                                    <input type="text" class="form-control" name="specialization"
                                        placeholder="{{ __('site.specialization') }}"
                                        value="{{ old('specialization') }}" required style=" border-color: black; ">
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label"
                                        for="customRadioInline2">{{ __('site.language_level') }} <span
                                            class="text-danger">*</span></label>

                                    <select class="form-control" name="english_proficiency" required
                                        style=" border-color: black; ">
                                        <option value="" disabled selected>{{__('site.select')}} {{ __('site.language_level') }}</option>
                                        <option value="basic"
                                            {{ old('english_proficiency') == 'basic' ? 'selected' : '' }}>
                                            {{ __('site.english_proficiency_1') }}</option>
                                        <option value="intermediate"
                                            {{ old('english_proficiency') == 'intermediate' ? 'selected' : '' }}>
                                            {{ __('site.english_proficiency_2') }}</option>
                                        <option value="advanced"
                                            {{ old('english_proficiency') == 'advanced' ? 'selected' : '' }}>
                                            {{ __('site.english_proficiency_3') }}</option>
                                            <option value="fluent"
                                            {{ old('english_proficiency') == 'fluent' ? 'selected' : '' }}>
                                            {{ __('site.english_proficiency_4') }}</option>
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label"
                                        for="customRadioInline2">{{ __('site.other_languages') }} <span
                                            class="text-danger">*</span></label>

                                    <input type="text" class="form-control" name="other_languages"
                                        placeholder="{{ __('site.other_languages') }} " value="{{ old('other_languages') }}"
                                        style=" border-color: black; ">
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label"
                                        for="experienceRepeater">{{ __('site.old_experiences') }} <span
                                            class="text-danger">*</span></label>
                                    <div id="experienceRepeater">
                                        @if (old('company_name'))
                                            @foreach (old('company_name') as $index => $companyName)
                                                <div class="experience-item mb-3">
                                                    <input type="text" class="form-control" name="company_name[]"
                                                        value="{{ $companyName }}"
                                                        placeholder="{{ __('site.company_name') }}" required
                                                        style="border-color: black;">
                                                    @error('company_name.' . $index)
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" class="form-control mt-2" name="position[]"
                                                        value="{{ old('position')[$index] ?? '' }}"
                                                        placeholder="{{ __('site.position') }}" required
                                                        style="border-color: black;">
                                                    @error('position.' . $index)
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="row mt-2">
                                                        <div class="col-md-6">
                                                            <input type="date" class="form-control" name="from_date[]"
                                                                value="{{ old('from_date')[$index] ?? '' }}" required
                                                                style="border-color: black;"
                                                                placeholder="{{ __('site.from_date') }}">
                                                            @error('from_date.' . $index)
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="date" class="form-control" name="to_date[]"
                                                                value="{{ old('to_date')[$index] ?? '' }}" required
                                                                style="border-color: black;"
                                                                placeholder="{{ __('site.to_date') }}">
                                                            @error('to_date.' . $index)
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <textarea class="form-control mt-2" name="responsibilities[]" rows="3"
                                                        placeholder="{{ __('site.responsibilities') }}" required style="border-color: black;">{{ old('responsibilities')[$index] ?? '' }}</textarea>
                                                    @error('responsibilities.' . $index)
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                   
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="experience-item mb-3">
                                                <input type="text" class="form-control" name="company_name[]"
                                                    placeholder="{{ __('site.company_name') }}" required
                                                    style="border-color: black;">
                                                <input type="text" class="form-control mt-2" name="position[]"
                                                    placeholder="{{ __('site.position') }}" required
                                                    style="border-color: black;">

                                                <div class="row mt-2">
                                                    <div class="col-md-6">
                                                        <input type="date" class="form-control" name="from_date[]"
                                                            required style="border-color: black;"
                                                            placeholder="{{ __('site.from_date') }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="date" class="form-control" name="to_date[]"
                                                            required style="border-color: black;"
                                                            placeholder="{{ __('site.to_date') }}">
                                                    </div>
                                                </div>

                                                <textarea class="form-control mt-2" name="responsibilities[]" rows="3"
                                                    placeholder="{{ __('site.responsibilities') }}" required style="border-color: black;"></textarea>
                                               
                                            </div>
                                         
                                        @endif
                                    </div>
                                    <div class="mt-2">

                                        <button type="button"
                                            class="btn btn-success addExperience" id="addExperience" style="@if(app()->getLocale() == 'ar')float: left @else float:right @endif">{{ __('site.add_other') }}</button>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label"
                                        for="customRadioInline2">{{ __('site.training_courses') }} <span
                                            class="text-danger">*</span></label>

                                    <textarea class="form-control" name="training_courses" rows="2"
                                        placeholder="{{ __('site.training_courses') }}" style=" border-color: black; ">{{ old('training_courses') }}</textarea>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label"
                                        for="customRadioInline2">{{ __('site.upload_cv') }} </label>

                                    <label class="text-white">Upload CV</label>
                                    <input type="file" class="form-control" name="cv"
                                        style=" border-color: black; ">
                                    @error('cv')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label class="custom-control-label"
                                        for="customRadioInline2">{{ __('site.upload_photo') }} <span
                                            class="text-danger">*</span></label>

                                    <label class="text-white">{{ __('upload_photo') }}</label>
                                    <input type="file" class="form-control" name="upload_photo" required
                                        style=" border-color: black; ">
                                    @error('upload_photo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>

                            <div class="text-center mt-4">
                                <button type="submit"
                                    class="btn btn-primary">{{ __('site.submit_application') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

    <script>
        document.getElementById('addExperience').addEventListener('click', function() {
            const experienceRepeater = document.getElementById('experienceRepeater');
            const newExperienceItem = document.createElement('div');
            newExperienceItem.classList.add('experience-item', 'mb-3');
            newExperienceItem.innerHTML = `
            <input type="text" class="form-control" name="company_name[]" placeholder="{{ __('site.company_name') }}" required style="border-color: black;">
            <input type="text" class="form-control mt-2" name="position[]" placeholder="{{ __('site.position') }}" required style="border-color: black;">
           <div class="row mt-2">
                <div class="col-md-6">
                    <input type="date" class="form-control" name="from_date[]" required style="border-color: black;" placeholder="{{ __('site.from_date') }}">
                </div>
                <div class="col-md-6">
                    <input type="date" class="form-control" name="to_date[]" required style="border-color: black;" placeholder="{{ __('site.to_date') }}">
                </div>
            </div>
            <textarea class="form-control mt-2" name="responsibilities[]" rows="3" placeholder="{{ __('site.responsibilities') }}" required style="border-color: black;"></textarea>
            <div class="mt-2">
              
            <button type="button" class="btn btn-danger  remove-experience">{{ __('site.remove') }}</button>
                </div>
        `;
            experienceRepeater.appendChild(newExperienceItem);
        });

        document.getElementById('experienceRepeater').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-experience')) {
                e.target.closest('.experience-item').remove();
            }
        });
    </script>


@endsection
