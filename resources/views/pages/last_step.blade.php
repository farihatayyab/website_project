<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">

<!-- jQuery (Required for Intl-Tel-Input) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Intl-Tel-Input JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<title>Mortgage Product Service</title>


<div id="__next"><div dir="ltr" class="h-[100dvh]"><div>
<div class="applications-container flex h-screen min-w-full flex-col overflow-y-auto bg-white max-md:gap-y-6 md:pb-12"><div id="lead-header" class="flex w-full items-center justify-center black" style="background-size: cover; background-image: url(&quot;&quot;);"><div class="mx-auto flex  w-full max-w-[1440px] items-center justify-between px-6 py-6 pb-6 lg:px-12"><a href="/en"><img alt="holo-logo" loading="lazy" width="64" height="64" decoding="async" data-nimg="1" style="color: transparent; max-width: 100%; height: auto; object-fit: contain;" srcset="https://hcdn.useholo.com/assets/holoBlack.svg 1x, https://hcdn.useholo.com/assets/holoBlack.svg 2x" src="https://hcdn.useholo.com/assets/holoBlack.svg"></a>
    <section class="flex gap-6">
        <a 
          href="/ar" 
          class="cursor-pointer py-2 pr-0 text-base font-normal text-primary hover:border-b hover:border-white">
          العربية
        </a>
      
        <a class="hidden lg:flex" href="/en/login">
          <button 
            class="flex items-center justify-center w-full h-10 px-3 text-sm font-medium text-white transition-transform bg-black rounded-lg hover:bg-gray-800 disabled:bg-gray-500 disabled:text-gray-400">
            <span>Login</span>
          </button>
        </a>
      </section>    

</div>
</div>
<div class="mx-auto flex w-full min-w-0 max-w-[1440px] flex-col items-center justify-center px-6 lg:flex-row lg:px-12">
<div class="flex w-full items-center justify-between lg:hidden">
<h1 class="text-[32px] font-bold leading-[38px] tracking-[-1px] text-text-primary transition-opacity duration-300 ease-in-out md:text-5xl md:leading-[48px]">You are almost done!</h1>
</div>
<div class="flex w-full flex-col-reverse gap-6 pt-6 lg:flex-row">
<div class="md:max-w-[360px]"><div class="hidden flex-col items-center transition-opacity duration-500 ease-in-out lg:flex opacity-100">
<h1 class="text-[32px] font-bold leading-[38px] tracking-[-1px] text-text-primary transition-opacity duration-300 ease-in-out md:mb-12 md:text-5xl md:leading-[48px]">You are almost done!</h1>
<div class="relative h-[360px] w-[360px] overflow-hidden rounded-[20px]">
    <br>
<video src="https://hcdn.useholo.com/assets/application/step-3.webm" width="360" height="360" class="rounded-[20px] object-cover" autoplay="" loop="" playsinline=""></video></div></div>
</div>

<div class="flex w-full flex-col gap-6 rounded-2xl bg-background-accent-gray-bolder px-4 py-6 md:gap-12 md:p-12">
    <div class="w-full flex-grow">
        <div class="flex h-full w-full flex-col justify-center">
            <div class="flex-grow mx-8 xxs:mx-12 mb-8 md:mb-0 md:mx-12">
                <div class="RSPBprogressBar" style="height: 2px;">
                    <div class="RSPBstep" style="left: 0%; transition-duration: 300ms; transform: translateX(-50%) scale(1);">
                        <div class="flex h-[18px] w-[18px] items-center justify-center rounded-full border-[5px] border-solid border-background-accent-gray-bolder" style="background-color: black;">
                            <span class="mt-16 flex w-fit whitespace-pre text-center text-sm font-medium md:whitespace-nowrap text-text-primary">Personal information</span>
                        </div>
                    </div>
                    <div class="RSPBstep" style="left: 50%; transition-duration: 300ms; transform: translateX(-50%) scale(1);">
                        <div class="flex h-[18px] w-[18px] items-center justify-center rounded-full border-[5px] border-solid border-background-accent-gray-bolder" style="background-color: black;">
                            <span class="mt-16 flex w-fit whitespace-pre text-center text-sm font-medium md:whitespace-nowrap text-text-primary">Property information</span>
                        </div>
                    </div>
                    <div class="RSPBstep" style="left: 100%; transition-duration: 300ms; transform: translateX(-50%) scale(1);">
                        <div class="flex h-[18px] w-[18px] items-center justify-center rounded-full border-[5px] border-solid border-background-accent-gray-bolder" style="background-color: black;">
                            <span class="mt-16 flex w-fit whitespace-pre text-center text-sm font-medium md:whitespace-nowrap text-text-primary">Explore mortgages</span>
                        </div>
                    </div>
                    <div class="RSPBprogression" style="background: linear-gradient(to right, black 0%, black 100%); width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear-start"></div>
    <div class="w-full flex-grow">
        <div class="whitespace-pre-line text-base font-normal md:text-lg text-text-primary bg-gray-100 p-6 rounded-lg shadow-md transition duration-300 ease-in-out hover:bg-gray-600">

          <!-- Display Success Message -->
 @if(session('success'))
 <div style="color: green; border: 1px solid green; padding: 10px; margin-top: 10px;">
     {{ session('success') }}
 </div>
 @endif

 <!-- Display Error Messages (Validation Errors) -->
 @if($errors->any())
 <div style="color: red; border: 1px solid red; padding: 10px; margin-top: 10px;">
     <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
 @endif

<form action="{{ route('productservice.thirdstore') }}" method="POST" class="en-get_my_mortgage" data-gtm-form-interact-id="0">
    @csrf
    <div class="mb-12 md:mt-12">
        <div>
            <div class="text-start">
                <h2 class="text-lg font-bold leading-[26px] text-text-primary md:text-3xl">
                    One step left before you view your mortgage options
                </h2>
                <div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5">
                    <span class="text-lg leading-5">We just need a few more details to proceed.</span>
                </div>
            </div>
            <div class="flex w-full flex-col justify-start">
                <div class="flex flex-col gap-6 md:max-w-[428px]">
                    
                    <!-- Name Field -->
                    <div class="flex flex-col gap-2">
                        <label for="name" class="text-sm flex gap-1">Full Name</label>
                        <div class="relative w-full">
                            <input 
                                name="name" 
                                placeholder="Enter your full name" 
                                autocomplete="off" 
                                class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3 @error('name') border-red-500 @enderror" 
                                style="border-color: rgb(10, 10, 10);" 
                                value="{{ old('name') }}"
                            >
                            <!-- Error message (if any) -->
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Email Field -->
                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-sm flex gap-1">Email Address</label>
                        <div class="relative w-full">
                            <input 
                                name="email" 
                                type="text" 
                                placeholder="Enter your email address" 
                                autocomplete="off" 
                                class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3 @error('email') border-red-500 @enderror" 
                                style="border-color: rgb(10, 10, 10);" 
                                value="{{ old('email') }}"
                            >
                            <!-- Error message (if any) -->
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Phone Field (IntlTelInput) -->
                    <div class="space-y-1.5">
                        <div style="direction: ltr;">
                            <div class="react-tel-input">
                                <div class="special-label"></div>
                                <input 
                                    id="phone" 
                                    class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3 @error('phone') border-red-500 @enderror" 
                                    style="border-color: rgb(10, 10, 10);" 
                                    type="tel" 
                                    name="phone" 
                                    placeholder="Enter phone number"
                                    value="{{ old('phone') }}"
                                >
                                <input 
                                    type="hidden" 
                                    id="full_phone" 
                                    name="full_phone" 
                                    value="{{ old('full_phone') }}"
                                >
                            </div>
                            <!-- Error message (if any) -->
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="text-start">
                        <div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5">
                            <span class="text-lg leading-5">
                                While we review your details, feel free to explore your dashboard and check out different mortgage options tailored for you!
                            </span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- Buttons -->
    <div class="flex items-center justify-end gap-6">
        <a href="{{ route('next.step') }}" 
           class="flex items-center justify-center border border-grey transition-transform rounded-lg bg-background-button-outline text-[#121217] border border-border-button-outline hover:bg-background-button-outline-hover disabled:bg-background-button-outline disabled:text-text-disabled h-14 px-6 text-base font-medium w-fit">
            <span>Back</span>
        </a>
        
        <button 
            type="submit" 
            class="flex items-center justify-center transition-transform rounded-lg bg-background-button-primary-gray text-white hover:bg-background-button-primary-gray-hover disabled:bg-background-button-primary-gray-disabled disabled:text-text-button-primary-disabled h-14 px-6 text-base font-medium" 
            id="lead-submit-button" 
            style="background-color: black;"
        >
            <span>Explore Mortgages</span>
        </button>
    </div>
</form>

    </div>
</div>
<button class="fixed bottom-12 right-8 z-50 hidden h-12 w-12 cursor-pointer rounded-full border border-natural-gray-2 bg-white hover:bg-slate-200">
    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" color="black" style="color: black; display: none;" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
        <path d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
    </svg>
</button>

<script>
    $(document).ready(function () {
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            separateDialCode: true,
            initialCountry: "ae", // Default country (UAE)
            preferredCountries: ["pk", "ae", "us", "in"],
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });

        // Phone number with country code store karein
        $("form").submit(function () {
            var fullPhoneNumber = iti.getNumber(); // Get full number with country code
            $("#full_phone").val(fullPhoneNumber);
        });
    });
</script>