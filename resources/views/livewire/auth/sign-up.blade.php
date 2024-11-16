<main class="h-dvh flex justify-center text-gray-500 p-5 overflow-auto">
    <div class="max-w-[60rem] w-full h-fit shadow-lg px-5 py-8 rounded-lg border">

        <div>
            <ul class="steps w-full">
                <li class="step {{ $currentStep >= 0 ? 'step-primary' : ''}}" >Account</li>
                <li class="step {{ $currentStep >= 1 ? 'step-primary' : ''}}" >Personal Data</li>
                <li class="step {{ $currentStep >= 2 ? 'step-primary' : ''}}" >Final Touch</li>
            </ul>
        </div>

        {{-- Tab steps --}}
        <form wire:submit.prevent="submit" id="steps-content">

            {{-- Tab 1 --}}
            @if($currentStep === 0)
                <div class="step-content flex flex-col gap-3" data-step="0">
                    <div class="text-center">
                        <h1 class="text-2xl font-semibold my-3">Account Information</h1>
                    </div>
                    <div class="flex gap-3 flex-nowrap">
                        <x-label-input label="Campus">
                            <select wire:model="campus" class="select select-bordered w-full">
                                <option value="">Select Campus</option>
                                <option value="tandag">Tandag</option>
                                <option value="marihatag">Marihatag</option>
                                <option value="cantilan">Cantilan</option>
                                <option value="cagwait">Cagwait</option>
                                <option value="tagbina">Tagbina</option>
                                <option value="san miguel">San Miguel</option>
                            </select>
                            @error('campus') <x-slot:error> {{ $message }} </x-slot:error> @enderror
                        </x-label-input>

                        <x-label-input label="Course">
                            <select wire:model="course" class="select select-bordered w-full">
                                <option value="">Select Course</option>
                                <option value="BSCS">Bachelor of Science in Computer Science</option>
                                <option value="BSED">Bachelor of Secondary Education major in Science</option>
                                <option value="BSPE">Bachelor of Physical Education</option>
                                <option value="BSCED">Bachelor of Early Childhood Education</option>
                                <option value="BSMID">Bachelor of Science in Midwifery</option>
                                <option value="BSFIL">Batsilyer sa Sining ng Filipino</option>
                                <option value="BSMATH">Bachelor of Science in Mathematics</option>
                                <option value="BSES">Bachelor of Science in Environmental Science</option>
                                <option value="BSBIO">Bachelor of Science in Biology</option>
                                <option value="BAPA">Bachelor of Arts in Public Administration</option>
                                <option value="BAPS">Bachelor of Arts in Political Science</option>
                                <option value="BAENG">Bachelor of Arts in English</option>
                                <option value="BAECON">Bachelor of Arts in Economics</option>
                                <option value="BSHM">Bachelor of Science in Hospitality Management</option>
                                <option value="BSCE">Bachelor of Science in Civil Engineering</option>
                                <option value="BLAW">Bachelor of Laws</option>
                                @error('course') <x-slot:error> {{ $message }} </x-slot:error>  @enderror
                            </select>
                        </x-label-input>
                    </div>

                    <div class="flex gap-3">
                        <x-label-input label="Register us">
                            <select wire:model="role" class="select select-bordered w-full">
                                <option value="">Register as (student or instructor)</option>
                                <option value="student">Student</option>
                                <option value="instructor">Instructor</option>
                            </select>
                            @error('role') <x-slot:error> {{ $message }} </x-slot:error> @enderror
                        </x-label-input>

                        <x-label-input label="Year">
                            <select wire:model="year" class="select select-bordered w-full">
                                <option value="">Select year</option>
                                <option value="1">First year</option>
                                <option value="2">Second year</option>
                                <option value="3">Third year</option>
                                <option value="4">Fourth year</option>
                                <option value="5">Fifth year</option>
                                <option value="gs">Graduate studies</option>
                            </select>
                            @error('year') <x-slot:error> {{ $message }} </x-slot:error> @enderror
                        </x-label-input>
                    </div>

                    <div class="flex gap-3 flex-wrap sm:flex-nowrap">
                        <x-label-input label="Email address">
                            <input
                                type="email"
                                wire:model="email"
                                name="email"
                                placeholder="Enter your email"
                                class="input input-bordered  w-full"
                            />
                            @error('email') <x-slot:error> {{ $message }} </x-slot:error> @enderror
                        </x-label-input>

                        <x-label-input label="Phone number">
                            <input
                                type="number"
                                wire:model="number"
                                name="number"
                                placeholder="e.g +63987615241 or 0987676545"
                                class="input input-bordered w-full"
                            />
                            @error('number') <x-slot:error> {{ $message }} </x-slot:error> @enderror
                        </x-label-input>
                    </div>

                    <div class="flex gap-3 flex-wrap sm:flex-nowrap">
                        <x-label-input label="Password">
                            <input
                                type="password"
                                wire:model="password"
                                name="password"
                                placeholder="Enter your password"
                                class="input input-bordered w-full"
                            />
                            @error('password') <x-slot:error> {{ $message }} </x-slot:error> @enderror
                        </x-label-input>

                        <x-label-input label="Confirm Password">
                            <input
                                type="password"
                                wire:model="password_confirmation"
                                placeholder="Confirm your password"
                                class="input input-bordered w-full"
                            />
                            @error('password_confirmation') <x-slot:error> {{ $message }} </x-slot:error> @enderror
                        </x-label-input>
                    </div>
                </div>
            @elseif($currentStep === 1)
                {{-- Tab 2 --}}
                <div class="step-content">
                    <div class="text-center my-8">
                        <h1 class="text-2xl font-semibold">Personal Information</h1>
                    </div>

                    <div class="flex gap-3 flex-wrap sm:flex-nowrap">
                        <x-label-input label="First name">
                            <input
                                type="text"
                                wire:model="firstname"
                                name="firstname"
                                class="input input-bordered  w-full"
                            />
                            @error('firstname') <x-slot:error> {{ $message }} </x-slot:error>  @enderror
                        </x-label-input>

                        <x-label-input label="Last name">
                            <input
                                type="text"
                                wire:model="lastname"
                                name="lastname"
                                class="input input-bordered w-full"
                            />
                            @error('lastname') <x-slot:error> {{ $message }} </x-slot:error>  @enderror
                        </x-label-input>
                    </div>

                    <div class="flex gap-3 flex-wrap sm:flex-nowrap">
                        <x-label-input label="Suffix">
                            <input type="text" wire:model="suffix" class="input input-bordered w-full" />
                            @error('suffix') <x-slot:error> {{ $message }} </x-slot:error>  @enderror
                        </x-label-input>

                        <x-label-input label="Gender">
                            <select wire:model="gender" class="select select-bordered w-full">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            @error('gender') <x-slot:error> {{ $message }} </x-slot:error>  @enderror
                        </x-label-input>
                    </div>

                </div >

            @elseif($currentStep === 2)
                {{-- Tab 3 --}}
                <div class="step-content">
                    <div class="text-center my-8">
                        <h1 class="text-2xl font-semibold">Final Touch</h1>
                    </div>

                    @if(session()->has('message'))
                        <div class="bg-green-300 p-5 rounded text-green-700 text-xl font-semibold">
                            <span>{{ session('message') }}</span>
                        </div>
                    @elseif($errors->any())
                        <div class="bg-red-300 text-red-700 font-semibold rounded p-5">
                            <p class="text-xl mb-5">Error</p>
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error  }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            @endif

            {{-- Steps btn --}}
            <div class="float-right flex gap-3 mt-5">
                <button type="button" wire:click="prevStep" class="btn {{ $currentStep === 0 ? 'hidden' : 'block'  }}">
                    Previous
                </button>

                @if ($currentStep < 2)
                    <button type="button" wire:click="nextStep" class="btn btn-primary">
                        Next
                    </button>
                @else
                    <button type="submit" wire:click="submit" class="btn btn-primary">
                        Submit
                    </button>
                @endif
            </div>

        </form>
    </div>
</main>
