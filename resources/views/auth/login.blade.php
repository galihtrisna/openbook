
@extends('layouts.auth')
@section('content')
<div>
                <img src="{{ asset('auth/images/openbook.png')}}" alt="">
                <div class="my-[70px]">
                    <div class="font-semibold text-[26px] mb-3">
                        Welcome Back
                    </div>
                    <p class="text-base text-[#767676] leading-7">
                        Explore our new book and get <br>
                        the better insight for your life
                    </p>
                </div>
                <form class="w-[370px]" action="{{ route('login') }}" method="post" >
                    @csrf
                    <div class="flex flex-col gap-6">
                        <div>
                            <label class="text-base block mb-2">Email Address</label>
                            <input type="email" name="email"
                                class="rounded-2xl bg-form-bg py-[13px] px-7 w-full focus:outline-alerange focus:outline-none @error('email') is-invalid @enderror"
                                placeholder="Email Address"
                                value="{{ old('email') }}" />
                                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                        </div>
                        <div>
                            <label class="text-base block mb-2">Password</label>
                            <input type="password" name="password"
                                class="rounded-2xl bg-form-bg py-[13px] px-7 w-full focus:outline-alerange focus:outline-none  @error('password') is-invalid @enderror"
                                placeholder="Password" />
                                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                        </div>
                    </div>
                    <div class="grid space-y-[14px] mt-[30px]">
                        <button type="submit" class="rounded-2xl bg-alerange py-[13px] text-center">
                            <span class="text-base font-semibold">
                                Start Reading
                            </span>
                        </button>
                        <a href="{{route('register')}}" class="rounded-2xl border border-white py-[13px] text-center">
                            <span class="text-base text-white">
                                Create New Account
                            </span>
                        </a>
                    </div>
                </form>
            </div>
@endsection