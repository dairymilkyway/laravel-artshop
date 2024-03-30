@extends('layout.authlayout')

@section('content')

{{-- @include('layout.header')

@include('layout.nav') --}}

{{-- register --}}

<div class="bg-cover bg-no-repeat py-1" style="background-image: url('https://images.pexels.com/photos/1000366/pexels-photo-1000366.jpeg')">
    <div class="pt-11 pb-11">
        <div class="max-w-3xl mx-auto backdrop-filter md:backdrop-blur-xl rounded-2xl px-6 py-7 overflow-hidden ">
            <div class="max-w-2xl mx-auto bg-white rounded-2xl px-6 py-7 overflow-hidden">
                <h2 class="text-2xl uppercase font-medium mb-1">Signup</h2>
                <p class="text-gray-500 mb-6 text-sm">
                    Register to
                    <span class="font-semibold text-lg text-center text-red-500 mb-2">ArtGallery</span>
                </p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="space-y-4">
                        {{-- first and last name --}}
                        <div class="grid grid-cols-2 space-x-2">
                            <div class="col-span-1">
                                <div class="flex">
                                    <label class="text-gray-500 mb-2 block">First Name</label>
                                    <p class="text-primary">*</p>
                                </div>
                                <input type="text" name="fname" class="block w-full border border-gray-300 px-4 py-3 text-gray-500 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="First Name">
                            </div>

                            <div class="col-span-1">
                                <div class="flex">
                                    <label class="text-gray-500 mb-2 block">Last Name</label>
                                    <p class="text-primary">*</p>
                                </div>
                                <input type="text" name="lname" class="block w-full border border-gray-300 px-4 py-3 text-gray-500 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="Last Name">
                            </div>
                        </div>

                        <div>
                            <div class="flex">
                                <label class="text-gray-500 mb-2 block">Email Address</label>
                                <p class="text-primary">*</p>
                            </div>
                            <input type="email" name="email" class="block w-full border border-gray-300 px-4 py-3 text-gray-500 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="Email Address">
                        </div>

                        <div>
                            <div class="flex">
                                <label class="text-gray-500 mb-2 block">Contact Number</label>
                                <p class="text-primary">*</p>
                            </div>
                            <input type="text" name="contact" class="block w-full border border-gray-300 px-4 py-3 text-gray-500 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="Contact">
                        </div>

                        <div>
                            <div class="flex">
                                <label class="text-gray-500 mb-2 block">Password</label>
                                <p class="text-primary">*</p>
                            </div>
                            <input type="password" name="password" class="block w-full border border-gray-300 px-4 py-3 text-gray-500 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="Password">
                        </div>

                        <div>
                            <div class="flex">
                                <label class="text-gray-500 mb-2 block">Confirm Password</label>
                                <p class="text-primary">*</p>
                            </div>
                            <input type="password" name="password_confirmation" class="block w-full border border-gray-300 px-4 py-3 text-gray-500 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="Confirm Password">
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="block w-full py-2 text-center text-white bg-red-600 border border-primary rounded hover:scale-105 hover:font-bold transition uppercase font-roboto font-medium">Sign up</button>
                        </div>
                    </div>
                </form>

                <p class="mt-4 text-gray-500 text-center">
                    Already got an Account? <a href="" class="text-primary text-semibold">Login Now</a>
                </p>
            </div>
        </div>
    </div>
</div>

{{-- end of register --}}

{{-- @include('layout.footer'); --}}
@endsection
