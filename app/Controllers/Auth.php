<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\Hash;

class Auth extends BaseController
{

    protected $helpers = ['form'];


    // This is the login page view

    public function login()
    {
        return view('auth/login');
    }

    // This is the register page view

    public function register()
    {
        echo view('/layouts/header');
        echo view('auth/register');
        echo view('/layouts/footer');
    }

    // This function save the users into the database

    public function registerUser()
    {

        // Validate the data before sending

        $rules = [
            'name'            => [
                'rules' => 'required|alpha',
                'errors' => [
                    'required' => 'The name is required'
                ],
            ],
            'lastname'            => [
                'rules' => 'required|alpha',
                'errors' => [
                    'required' => 'The lastname is required'
                ],
            ],
            'company'            => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The company is required'
                ],
            ],
            'address_1'            => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The address is required'
                ],
            ],

            'city'            => [
                'rules' => 'required|alpha',
                'errors' => [
                    'required' => 'The city is required'
                ],
            ],

            'state'            => [
                'rules' => 'required|alpha',
                'errors' => [
                    'required' => 'The state is required'
                ],
            ],

            'zip'            => [
                'rules' => 'required|numeric|is_natural_no_zero|min_length[5]',
                'errors' => [
                    'required' => 'The zip number is required',
                    'numeric' => 'Only use numerical characters',
                    'is_natural_no_zero' => 'Only use natural numbers greater than zero',
                    'min_length' => 'Invalid zip'
                ],
            ],

            'phone'            => [
                'rules' => 'required|numeric|is_natural_no_zero|min_length[9]',
                'errors' => [
                    'required' => 'The phone number is required',
                    'numeric' => 'Only use numerical characters',
                    'is_natural_no_zero' => 'Only use natural numbers greater than zero',
                    'min_length' => 'Invalid phone number'
                ],
            ],

            'email'            => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'The phone numer is required',
                    'valid_email' => 'Please check the Email field. It does not appear to be valid',
                    'is_unique' => 'This email is already use'
                ],
            ],
            'password'            => [
                'rules' => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required' => 'The password is required',
                    'min_length' => 'Use more than 5 characters',
                    'max_length' => 'Use less than 20 characters'
                ],
            ],

            'confirmPassword'            => [
                'rules' => 'required|min_length[5]|max_length[20]|matches[password]',
                'errors' => [
                    'required' => 'The password is required',
                    'min_length' => 'Use more than 5 characters',
                    'max_length' => 'Use less than 20 characters',
                    'matches' =>  'Password does not match'
                ]
            ]
        ];


        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }



        // saving the data

        $name = $this->request->getPost('name');
        $lastname = $this->request->getPost('lastname');
        $company = $this->request->getPost('company');
        $address_1 = $this->request->getPost('address_1');
        $address_2 = $this->request->getPost('address_2');
        $city = $this->request->getPost('city');
        $state = $this->request->getPost('state');
        $zip = $this->request->getPost('zip');
        $phone = $this->request->getPost('phone');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirmPassword');

        $data = [
            'name'            => $name,
            'lastname'       => $lastname,
            'company'         => $company,
            'address_1'       => $address_1,
            'address_2'       => $address_2,
            'city'           => $city,
            'state'          => $state,
            'zip'            => $zip,
            'phone'          => $phone,
            'email'          => $email,
            'password'        => Hash::encrypt($password),
            'confirmPassword' => $confirmPassword,
        ];

        // sending the $data to the database

        $userModel = new \App\Models\UserModel();
        $query = $userModel->insert($data);

        if (!$query) {
            return redirect()->back()->with('fail', 'Saving user failed');
        } else {
            return redirect()->route('/')->with('success', 'Saving user successfully');
        }
    }
}
