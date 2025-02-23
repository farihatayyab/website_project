<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<title>Mortgage Product Service</title>


<div id="__next">
<div dir="ltr" class="h-[100dvh]">
<div>
<div class="applications-container flex h-screen min-w-full flex-col overflow-y-auto bg-white max-md:gap-y-6 md:pb-12">
<div id="lead-header" class="flex w-full items-center justify-center black" style="background-size: cover; background-image: url(&quot;&quot;);">
<div class="mx-auto flex  w-full max-w-[1440px] items-center justify-between px-6 py-6 pb-6 lg:px-12">
<a href="/en"><img alt="holo-logo" loading="lazy" width="64" height="64" decoding="async" data-nimg="1" style="color: transparent; max-width: 100%; height: auto; object-fit: contain;" srcset="https://hcdn.useholo.com/assets/holoBlack.svg 1x, https://hcdn.useholo.com/assets/holoBlack.svg 2x" src="https://hcdn.useholo.com/assets/holoBlack.svg"></a>
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
<h1 class="text-[32px] font-bold leading-[38px] tracking-[-1px] text-text-primary transition-opacity duration-300 ease-in-out md:text-5xl md:leading-[48px]">The right mortgage for your property!</h1>

</div>

<div class="flex w-full flex-col-reverse gap-6 pt-6 lg:flex-row">
    
    
<div class="md:max-w-[360px]">
    
<div class="hidden flex-col items-center transition-opacity duration-500 ease-in-out lg:flex opacity-100">
    
<h1 class="text-[32px] font-bold leading-[38px] tracking-[-1px] text-text-primary transition-opacity duration-300 ease-in-out md:mb-12 md:text-5xl md:leading-[48px]">The right mortgage for your property!</h1>

<div class="relative h-[360px] w-[360px] overflow-hidden rounded-[20px]">
   <br> 
<video src="https://hcdn.useholo.com/assets/application/step-2.webm" width="360" height="360" class="rounded-[20px] object-cover" autoplay="" loop="" playsinline=""></video>
</div>
</div>
</div>

<div class="flex w-full flex-col gap-6 rounded-2xl bg-background-accent-gray-bolder px-4 py-6 md:gap-12 md:p-12">
<div class="w-full flex-grow">
<div class="flex h-full w-full flex-col justify-center">
<div class="flex-grow mx-8 xxs:mx-12 mb-8 md:mb-0 md:mx-12">
<div class="RSPBprogressBar" style="height: 2px;">
<div class="RSPBstep" style="left: 0%; transition-duration: 300ms; transform: translateX(-50%) scale(1);">

</div>
<div class="RSPBstep" style="left: 50%; transition-duration: 300ms; transform: translateX(-50%) scale(1);">

</div><div class="RSPBstep" style="left: 100%; transition-duration: 300ms; transform: translateX(-50%) scale(1);">
    </div>

</div></div></div></div>
<div class="whitespace-pre-line text-base font-normal md:text-lg text-text-primary bg-gray-100 p-6 rounded-lg shadow-md transition duration-300 ease-in-out hover:bg-gray-600">

    <div class="clear-start"></div>
    <div class="w-full flex-grow">
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
      <form action="{{ route('productservice.secondstore') }}" method="POST">
        @csrf
        <div class="mb-12">
          <div class="space-y-8 md:space-y-12">
            <div>
              <h2 class="text-lg font-bold leading-[26px] text-text-primary md:text-3xl">
                What type of purchase are you making?
              </h2>
              <div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5">
                <span class="text-lg leading-5">We offer solutions for new purchases, buyouts, or if you're still exploring.</span>
              </div>
            </div>
            <div>
              <div class="flex flex-col gap-3 md:flex-row">
                <label for="radio-NEW_PURCHASEpurchaseType" class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3" style="border-color: rgb(11, 11, 12);">
                  <input name="purchaseType" type="radio" required id="radio-NEW_PURCHASEpurchaseType" value="NEW_PURCHASE"
                  {{ old('purchaseType') == 'BUY_OUT' ? 'checked' : '' }}>
                 
                  <span class="h-2 w-2 rounded-full transition-all duration-300" style="background-color: transparent;"></span>
                  <span class="whitespace-nowrap text-sm leading-[22px] text-[#6C6C89]">New purchase</span>
                </label>
    
                <label for="radio-BUY_OUTpurchaseType" class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3" style="border-color: rgb(9, 9, 10);">
                  <input name="purchaseType" type="radio" required id="radio-BUY_OUTpurchaseType" value="BUY_OUT" {{ old('purchaseType') == 'NEW_PURCHASE' ? 'checked' : '' }}>
                  <span class="h-2 w-2 rounded-full transition-all duration-300" style="background-color: transparent;"></span>
                  <span class="whitespace-nowrap text-sm leading-[22px] text-[#6C6C89]">Buy out</span>
                </label>
              </div>
            </div>
          </div>
    <br>
          <div>
            <h2 class="text-lg font-bold leading-[26px] text-text-primary md:text-3xl">What is your budget for the property?</h2>
            <div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5">
              <span class="text-lg leading-5">Let us know the maximum amount you’re considering for your new home.</span>
              <br>
              <span class="text-lg leading-5">  Based on your income, the bank may lend you up to: </span>
              <br>
              <span class="font-semibold text-xl mt-2 block">840,000 AED</span>
        
            </div>
          </div>
    
          
            
    
          <div class="w-full md:max-w-[428px]">
            <div class="flex flex-col gap-2">
              <label for="propertyValue" class="text-sm flex gap-1"></label>
              <div class="relative w-full">
                <div class="absolute top-1/2 h-full -translate-y-1/2" style="inset-inline-start: 0px;">
                </div>
                <input name="propertyValue" type="text" required class="min-h-[48px] w-full min-w-full border border-black appearance-none rounded-lg border border-border-neutral bg-white px-2 py-2 indent-2 focus:outline-none hover:focus:outline-none placeholder:text-text-secondary" value="{{ old('propertyValue') }}">
                <div class="absolute top-1/2 h-full -translate-y-1/2" style="inset-inline-end: 0px;">
                  <div class="flex h-full w-full items-center justify-center border-s border-border-neutral px-3 text-sm text-text-primary">AED</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
        <h2 class="text-lg font-bold leading-[26px] text-text-primary md:text-3xl">Which bank holds your current mortgage?</h2>
        <div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5">
            <span class="text-lg leading-5">Select the bank where your current loan is held. This helps us tailor the best buyout options for you. <div>
                </div>
        </span>
    </div>
</div>



<div class="w-full md:max-w-[428px]">
    <div class="relative min-w-[0px] undefined custom-dropdown">
        <div>
           
                <div class="col-span-11 dropdown-header ">
                   
                    <select id="lender-dropdown"  name="lender" class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3 appearance-none" style="border-color: rgb(11, 11, 12);">
                     <option value="" disabled selected>Select lender</option>
                        <!-- Banks in Dubai -->
                        <option value="bank1" {{ old('bank') == 'bank1' ? 'selected' : '' }}>Emirates NBD</option>
                        <option value="bank2" {{ old('bank') == 'bank2' ? 'selected' : '' }}>Abu Dhabi Commercial Bank</option>
                        <option value="bank3" {{ old('bank') == 'bank3' ? 'selected' : '' }}>Dubai Islamic Bank</option>
                        <option value="bank4" {{ old('bank') == 'bank4' ? 'selected' : '' }}>Mashreq Bank</option>
                        <option value="bank5" {{ old('bank') == 'bank5' ? 'selected' : '' }}>First Abu Dhabi Bank</option>
                        <option value="bank6" {{ old('bank') == 'bank6' ? 'selected' : '' }}>HSBC UAE</option>
                        <option value="bank7" {{ old('bank') == 'bank7' ? 'selected' : '' }}>Standard Chartered UAE</option>
                        <option value="bank8" {{ old('bank') == 'bank8' ? 'selected' : '' }}>RAKBANK</option>
                        <option value="bank9" {{ old('bank') == 'bank9' ? 'selected' : '' }}>Dubai Bank</option>
                        <option value="bank10" {{ old('bank') == 'bank10' ? 'selected' : '' }}>National Bank of Fujairah</option>
                        <option value="bank11" {{ old('bank') == 'bank11' ? 'selected' : '' }}>United Arab Bank</option>
                        <option value="bank12" {{ old('bank') == 'bank12' ? 'selected' : '' }}>Commercial Bank of Dubai</option>
                        <option value="bank13" {{ old('bank') == 'bank13' ? 'selected' : '' }}>Al Hilal Bank</option>
                        <option value="bank14" {{ old('bank') == 'bank14' ? 'selected' : '' }}>Dubai Bank</option>
                        <option value="bank15" {{ old('bank') == 'bank15' ? 'selected' : '' }}>Ajman Bank</option>
                        <option value="bank16" {{ old('bank') == 'bank16' ? 'selected' : '' }}>Bank of Sharjah</option>
                        <option value="bank17" {{ old('bank') == 'bank17' ? 'selected' : '' }}>Sharjah Islamic Bank</option>
                        <option value="bank18" {{ old('bank') == 'bank18' ? 'selected' : '' }}>Union National Bank</option>
                        <option value="bank19" {{ old('bank') == 'bank19' ? 'selected' : '' }}>Dubai Mercantile Bank</option>
                        <option value="bank20" {{ old('bank') == 'bank20' ? 'selected' : '' }}>Emirates Islamic Bank</option>
                        <option value="bank21" {{ old('bank') == 'bank21' ? 'selected' : '' }}>Al Masraf</option>
                        <option value="bank22" {{ old('bank') == 'bank22' ? 'selected' : '' }}>Fujairah National Bank</option>
                        <option value="bank23" {{ old('bank') == 'bank23' ? 'selected' : '' }}>Al Ahli Bank of Kuwait</option>
                        <option value="bank24" {{ old('bank') == 'bank24' ? 'selected' : '' }}>Commercial Bank of Dubai</option>
                        <option value="bank25" {{ old('bank') == 'bank25' ? 'selected' : '' }}>Bank of Baroda UAE</option>
                        <option value="bank26" {{ old('bank') == 'bank26' ? 'selected' : '' }}>CitiBank UAE</option>
                        <option value="bank27" {{ old('bank') == 'bank27' ? 'selected' : '' }}>Deutsche Bank</option>
                        <option value="bank28" {{ old('bank') == 'bank28' ? 'selected' : '' }}>Bank of China UAE</option>
                        <option value="bank29" {{ old('bank') == 'bank29' ? 'selected' : '' }}>Qatar National Bank</option>
                        <option value="bank30" {{ old('bank') == 'bank30' ? 'selected' : '' }}>National Bank of Abu Dhabi</option>
                        <option value="bank31" {{ old('bank') == 'bank31' ? 'selected' : '' }}>Arab Bank</option>
                        <option value="bank32" {{ old('bank') == 'bank32' ? 'selected' : '' }}>Riyad Bank</option>
                        <option value="bank33" {{ old('bank') == 'bank33' ? 'selected' : '' }}>Bank Audi</option>
                        <option value="bank34" {{ old('bank') == 'bank34' ? 'selected' : '' }}>Banque Libano-Française</option>
                        <option value="bank35" {{ old('bank') == 'bank35' ? 'selected' : '' }}>Bahrain Islamic Bank</option>
                        <option value="bank36" {{ old('bank') == 'bank36' ? 'selected' : '' }}>Kuwait Finance House</option>
                        <option value="bank37" {{ old('bank') == 'bank37' ? 'selected' : '' }}>Bank of Sharjah</option>
                        <option value="bank38" {{ old('bank') == 'bank38' ? 'selected' : '' }}>Abu Dhabi Islamic Bank</option>
                        <option value="bank39" {{ old('bank') == 'bank39' ? 'selected' : '' }}>Al Masraf Bank</option>
                        <option value="bank40" {{ old('bank') == 'bank40' ? 'selected' : '' }}>FGB Bank</option>
                        <option value="bank41" {{ old('bank') == 'bank41' ? 'selected' : '' }}>NBF Bank</option>
                        <option value="bank42" {{ old('bank') == 'bank42' ? 'selected' : '' }}>Mashreq Bank</option>
                        <option value="bank43" {{ old('bank') == 'bank43' ? 'selected' : '' }}>ADIB</option>
                        <option value="bank44" {{ old('bank') == 'bank44' ? 'selected' : '' }}>Burgan Bank</option>
                        <option value="bank45" {{ old('bank') == 'bank45' ? 'selected' : '' }}>Lebanese Canadian Bank</option>
                        <option value="bank46" {{ old('bank') == 'bank46' ? 'selected' : '' }}>Arab Bank</option>
                        <option value="bank47" {{ old('bank') == 'bank47' ? 'selected' : '' }}>Al Rajhi Bank</option>
                        <option value="bank48" {{ old('bank') == 'bank48' ? 'selected' : '' }}>Samba Financial Group</option>
                        <option value="bank49" {{ old('bank') == 'bank49' ? 'selected' : '' }}>Arab National Bank</option>
                        <option value="bank50" {{ old('bank') == 'bank50' ? 'selected' : '' }}>Saudi British Bank</option>
                        <option value="bank51" {{ old('bank') == 'bank51' ? 'selected' : '' }}>Alinma Bank</option>
                        <option value="bank52" {{ old('bank') == 'bank52' ? 'selected' : '' }}>Saudi Hollandi Bank</option>
                        <option value="bank53" {{ old('bank') == 'bank53' ? 'selected' : '' }}>Banque Libano-Française</option>
                        <option value="bank54" {{ old('bank') == 'bank54' ? 'selected' : '' }}>Bank of Jordan and the Middle East</option>
                        <option value="bank55" {{ old('bank') == 'bank55' ? 'selected' : '' }}>Bank of Beirut and the Arab Countries</option>
                        <option value="bank56" {{ old('bank') == 'bank56' ? 'selected' : '' }}>Al Baraka Bank</option>
                        <option value="bank57" {{ old('bank') == 'bank57' ? 'selected' : '' }}>SGBL</option>
                        <option value="bank58" {{ old('bank') == 'bank58' ? 'selected' : '' }}>Mizrahi Tefahot Bank</option>
                        <option value="bank59" {{ old('bank') == 'bank59' ? 'selected' : '' }}>Lebanese Bank</option>
                        <option value="bank60" {{ old('bank') == 'bank60' ? 'selected' : '' }}>Al Habib Bank</option>
                        <option value="bank61" {{ old('bank') == 'bank61' ? 'selected' : '' }}>Bahrain Development Bank</option>
                        <option value="bank62" {{ old('bank') == 'bank62' ? 'selected' : '' }}>Kuwait Investment Authority</option>
                        
                    </select>
                    {{-- @error('lender')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror --}}
                
                  <!-- Initialize Select2 for the dropdown -->

<!-- Initialize Select2 for the dropdown -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
      $('#lender-dropdown').select2({
          placeholder: "Select lender",
          allowClear: true
      });
  });
</script>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Initialize Select2 for the dropdown -->

<div>
    <h2 class="text-lg font-bold leading-[26px] text-text-primary md:text-3xl">
      What is your remaining loan balance?
    </h2>
    
    <div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5">
      <span class="text-lg leading-5">
        Enter the outstanding loan amount that you’d like to refinance.
      </span>
    </div>
  </div>

  <div class="w-full md:max-w-[428px]">
    <div class="flex flex-col gap-2">
      <label for="outstandingLoan" class="text-sm flex gap-1"></label>
      
      <div class="relative w-full">
        <!-- Input field container -->
        <input name="outstandingLoan" type="text"class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3 appearance-none" style="border-color: rgb(11, 11, 12);" value="{{old('outstandingLoan')}}">
        
        <!-- AED symbol container -->
        <div class="absolute top-1/2 h-full -translate-y-1/2" style="inset-inline-end: 0px;">
            <div class="absolute top-1/2 h-full -translate-y-1/2" style="inset-inline-end: 0px;">
                <div class="flex h-full w-full items-center justify-center border-s border-border-neutral px-3 text-sm text-text-primary">AED</div>
              </div>
        </div>
      </div>
    </div>
  </div>
  <br>
        <div class="flex items-center justify-end gap-6">
            <a href="{{ route('mortgage.products') }}" class="flex items-center justify-center border border-grey transition-transform rounded-lg bg-background-button-outline text-[#121217] border border-border-button-outline hover:bg-background-button-outline-hover disabled:bg-background-button-outline disabled:text-text-disabled h-14 px-6 text-base font-medium w-fit">
                <span>Back</span>
              </a>
              
              <button type="submit" class="flex items-center justify-center transition-transform rounded-lg bg-background-button-primary-gray text-white hover:bg-background-button-primary-gray-hover disabled:bg-background-button-primary-gray-disabled disabled:text-text-button-primary-disabled h-14 px-6 text-base font-medium" id="lead-submit-button" style="background-color: black;">
                <span>Last step</span>
            </button>
              

             
        </div>
      </form>
    </div>
    
    <button class="fixed bottom-12 right-8 z-50 hidden h-12 w-12 cursor-pointer rounded-full border border-natural-gray-2 bg-white hover:bg-slate-200">
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" color="black" style="color: black; display: none;" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
        <path d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
      </svg>
    </button>
    
    <span id="__chakra_env" hidden=""></span>
    