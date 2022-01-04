@extends('layouts.app')

@section('title', 'Register To Brin')

@section('content')
    <section class="flex-1 py-8 px-2 md:px-8 flex flex-col items-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Register Card-->
        <div
            class=" bg-white max-w-2xl w-full space-y-8 px-4 sm:px-6 py-7 rounded-3xl text-black flex flex-col items-center tracking-tighter">
            <img src=" ./img/brin-logo-black.png" alt="brin logo" class="w-48 sm:w-60">
            <form class="w-full space-y-5 leading-none tracking-tighter px-6" action="{{route('register')}}" method="POST">
                @csrf
                <div class="space-y-3">
                    <label class="text-sm font-medium" for="usernameInput">
                        Nama Lengkap <span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="usernameInput" class="block w-full rounded-md placeholder-gray-400 py-2 px-6 @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}" placeholder="Nama" name="name" required autocomplete="off">
                    @error('name')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="space-y-3">
                    <label class="text-sm font-medium" for="emailInput">Alamat E-mail <span
                            class="text-red-600">*</span></label>
                    <input type="email" id="emailInput" class="block w-full rounded-md placeholder-gray-400 py-2 px-6 @error('email') border-red-500 @enderror" name="email"
                    value="{{ old('email') }}" placeholder="Ketik disini" required autocomplete="off">
                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="w-full flex flex-col sm:flex-row gap-4 sm:items-center sm:justify-between">
                    <!-- form left -->
                    <div class="space-y-3 flex-1">
                        <div class="space-y-3">
                            <label class="text-sm font-medium" for="passwordInput">Password <span
                                    class="text-red-600">*</span></label>
                            <input type="password" id="passwordInput"
                                class="block w-full rounded-md placeholder-gray-400 py-2 px-6 @error('password') border-red-500 @enderror" name="password"
                                placeholder="Ketik disini" required>
                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="space-y-3">
                            <label class="text-sm font-medium" for="identitasInput">Jenis Identitas <span
                                    class="text-red-600">*</span></label>
                            <select name="identity_type" id="identitasInput"
                                class="block w-full rounded-md py-2 px-6 invalid:text-gray-400 cursor-pointer" name="identity"
                                value="{{ old('identity') }}" required>
                                <option value="" disabled selected hidden>--Pilih--</option>
                                <!-- Template Option -->
                                @foreach ($identityTypes as $type)
                                    <option value="{{$type->id}}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="space-y-3">
                            <label class="text-sm font-medium" for="GenderInput">Jenis Kelamin <span
                                    class="text-red-600">*</span></label>
                            <select name="gender" id="GenderInput"
                                class="block w-full rounded-md py-2 px-6 invalid:text-gray-400 cursor-pointer" value="{{ old('gender') }}" required>
                                <option value="" disabled selected hidden>--Pilih--
                                </option>
                                <!-- Contoh Option -->
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <!-- form right -->
                    <div class="space-y-3 flex-1">
                        <div class="space-y-3">
                            <label class="text-sm font-medium" for="rePasswordInput">Konfirmasi
                                Password <span class="text-red-600">*</span></label>
                            <input type="password" id="rePasswordInput"
                                class="block w-full rounded-md placeholder-gray-400 py-2 px-6" name="password_confirmation"
                                placeholder="Ketik disini" required>
                        </div>
                        <div class="space-y-3">
                            <label class="text-sm font-medium" for="noIdentitasInput">Nomor Identitas <span
                                    class="text-red-600">*</span></label>
                            <input type="text" id="noIdentitasInput"
                                class="block w-full rounded-md placeholder-gray-400 py-2 px-6 @error('identity_number') border-red-500 @enderror" 
                                value="{{ old('identity_number') }}" name="identity_number"
                                placeholder="Ketik disini" required autocomplete="off">
                            @error('identity_number')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="space-y-3">
                            <label class="text-sm font-medium" for="birthDate">Tanggal Lahir <span
                                    class="text-red-600">*</span></label>
                            <input type="date" id="birthDate"
                                class="block w-full invalid:text-gray-400 rounded-md  py-2 px-6 @error('birthday') border-red-500 @enderror"
                                value="{{ old('birthday') }}" name="birthday" required>
                            @error('birthday')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex justify-center pt-5">
                    <button
                        class="w-full sm:w-max rounded-xl bg-indigo-500 hover:bg-indigo-600 shadow-indigo-700  shadow-md text-white md:py-3 font-bold"
                        type="submit">Daftar
                    </button>
                </div>


            </form>

        </div>

    </section>
@endsection
