<?php

namespace App\Livewire\Auth;

use App\Services\user\UserService;
use Illuminate\View\View;
use Livewire\Component;

class SignUp extends Component
{
    public string $campus;
    public string $course;
    public string $role;
    public string $year_level;
    public string $email;
    public string $number;
    public string $password;
    public string $password_confirmation;
    public string $firstname;
    public string $lastname;
    public string $suffix;
    public string $gender;

    public int $currentStep = 0;

    protected array $rules = [
        'campus' => 'required|string|in:tandag,marihatag,cantilan,cagwait,tagbina,san miguel',
        'course' => 'required|string|in:BSCS,BSED,BSPE,BSCED,BSMID,BSFIL,BSMATH,BSES,BSBIO,BAPA,BAPS,BAENG,BAECON,BSHM,BSCE,BLAW',
        'role' => 'required|string|in:student,instructor',
        'email' => 'required|email|unique:users,email',
        'year_level' => 'nullable|string',
        'number' => 'required|size:11',
        'password' => 'required|string|min:8|confirmed',
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'suffix' => 'nullable|string|max:50',
        'gender' => 'required|string|in:male,female',
    ];

    protected array $messages = [
        'email.unique' => 'Email is already used!',
        'role.required' => 'Register us field is required!',
    ];

    public function prevStep(): void
    {
        if($this->currentStep > 0) {
            $this->currentStep--;
        }
    }

    public function nextStep(): void
    {
        if ($this->currentStep < 2) {
            $this->currentStep++;
        }
    }

    public function submit(UserService $service): void
    {
        $data = $this->validate();

        $service->createUser($data);

        session()->flash('message', 'We send you an email when your account is ready!');
    }

    public function render(): View
    {
        return view('livewire.auth.sign-up');
    }

}