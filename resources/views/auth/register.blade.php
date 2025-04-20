{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    [x-cloak] { display: none !important; }
    .smooth-height {
      transition: height 0.3s ease;
    }
  </style>

@vite(['resources/css/custom.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen" data-bs-scroll="true">



{{--  --}}

  <div x-data="tabs()" x-init="init" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md ">
    <div class="flex flex-col  w-full max-w-md h-md-auto ">
        <img src="/images/home/light/logo_your.png" class="logo" alt="">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

    </div>

    <!-- Tabs -->
    <div class="flex mb-6 border-b">
      <button @click="setTab('institute')"
              :class="tab === 'institute' ? 'text-blue-600 border-b-2 border-blue-600 font-semibold' : 'text-gray-500'"
              class="w-1/2 py-2 focus:outline-none transition-all duration-300">
        Institute
      </button>
      <button @click="setTab('student')"
              :class="tab === 'student' ? 'text-blue-600 border-b-2 border-blue-600 font-semibold' : 'text-gray-500'"
              class="w-1/2 py-2 focus:outline-none transition-all duration-300">
        Student
      </button>
    </div>
    {{--  --}}

    {{-- Print Errors if Exist --}}
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{--  --}}


    <!-- Form Wrapper -->
    <div x-ref="container" class="relative overflow-hidden smooth-height min-h-[300px]">

      <!-- Student Form -->
      <div x-ref="student"
           x-show="tab === 'student'"
           x-cloak
           x-transition
           class="absolute top-0 left-0 w-full">
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
          @csrf
          {{-- Down here the value 2 mean->'student'  --}}

          <input type="hidden" name="role" required value="student">

          <div>
            <label class="block mb-1 text-gray-700">Name</label>
            <input type="text" name="name" required class="w-full px-4 py-2 border rounded-md" autocomplete="off">
          </div>

          <div>
            <label class="block mb-1 text-gray-700">Email</label>
            <input type="email" name="email" required class="w-full px-4 py-2 border rounded-md" >
          </div>

          <div>
            <label class="block mb-1 text-gray-700">Password</label>
            <input type="password" name="password" required class="w-full px-4 py-2 border rounded-md">
          </div>

              <!-- Confirm Password -->
        <div >
            <label for="password_confirmation" class="block mb-1 text-gray-700">
                Confirm Password
            </label>
            <input id="password_confirmation" class="w-full px-4 py-2 border rounded-md"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

          <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
            Register
          </button>
        </form>
      </div>

     <!-- Institute Form -->
<div x-ref="institute"
x-show="tab === 'institute'"
x-cloak
x-transition
class="absolute top-0 left-0 w-full">
<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-4">
@csrf
{{-- Down here the value 1 mean->'institute'  --}}
<input type="hidden" name="role" required value="institute">


<div>
    <label class="block mb-1 text-gray-700">Institute Name</label>
    <input type="text" name="ins_name" required class="w-full px-4 py-2 border rounded-md" autocomplete="off">
   </div>


<div>
 <label class="block mb-1 text-gray-700">Email</label>
 <input type="email" name="email" required class="w-full px-4 py-2 border rounded-md">
</div>

<div>
 <label class="block mb-1 text-gray-700">Password</label>
 <input type="password" name="password" required class="w-full px-4 py-2 border rounded-md">
</div>

            <!-- Confirm Password -->
            <div >
                <label for="password_confirmation" class="block mb-1 text-gray-700">
                    Confirm Password
                </label>
                <input id="password_confirmation" class="w-full px-4 py-2 border rounded-md"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

<div>
 <label class="block mb-1 text-gray-700">Upload License Photo</label>
 <input type="file" name="ins_lic_photo"  accept="image/*" required class="w-full px-4 py-2 border rounded-md">
</div>

<button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
 Register
</button>
</form>
</div>

    </div>
  </div>

  {{--  --}}
  {{--  --}}
  <script>
    function tabs() {
      return {
        tab: 'student',
        init() {
          this.$nextTick(() => this.setHeight());
        },
        setTab(tabName) {
          this.tab = tabName;
          this.$nextTick(() => this.setHeight());
        },
        setHeight() {
          const container = this.$refs.container;
          const content = this.$refs[this.tab];
          container.style.height = content.offsetHeight + 'px';
        }
      };
    }
  </script>

</body>
</html>
