@extends('layouts.app')

@section('title', 'Mortgage Product Service')

@section('content')
<div id="__next">
<div dir="ltr" class="h-[100dvh]"><div>
<div class="applications-container flex h-screen min-w-full flex-col overflow-y-auto bg-white max-md:gap-y-6 md:pb-12">
<div id="lead-header" class="flex w-full items-center justify-center black" style="background-size: cover; background-image: url(&quot;&quot;);">
<div class="mx-auto flex  w-full max-w-[1440px] items-center justify-between px-6 py-6 pb-6 lg:px-12"><a href="/en"><img alt="holo-logo" loading="lazy" width="64" height="64" decoding="async" data-nimg="1" style="color: transparent; max-width: 100%; height: auto; object-fit: contain;" srcset="https://hcdn.useholo.com/assets/holoBlack.svg 1x, https://hcdn.useholo.com/assets/holoBlack.svg 2x" src="https://hcdn.useholo.com/assets/holoBlack.svg"></a>
<section class="flex gap-6">
    
 <a href="/ar" class="cursor-pointer py-2 pr-0 text-base font-normal hover:border-b hover:border-white text-primary">
        العربية
      </a>
      
<a class="hidden lg:flex" href="/en/login">
        <button class="flex items-center justify-center transition-transform rounded-lg bg-black text-white hover:bg-gray-800 disabled:bg-gray-500 disabled:text-gray-400 h-10 px-3 text-sm font-medium w-full">
          <span>Login</span>
        </button>
      </a>
      

</section></div></div>

<div class="mx-auto flex w-full min-w-0 max-w-[1440px] flex-col items-center justify-center px-6 lg:flex-row lg:px-12">
<div class="flex w-full items-center justify-between lg:hidden">
<h1 class="text-[32px] font-bold leading-[38px] tracking-[-1px] text-text-primary transition-opacity duration-300 ease-in-out md:text-5xl md:leading-[48px]">Let’s get to know you!
</h1>
</div>
<div class="flex w-full flex-col-reverse gap-6 pt-6 lg:flex-row">
<div class="md:max-w-[360px]">
<div class="hidden flex-col items-center transition-opacity duration-500 ease-in-out lg:flex opacity-100">
<h1 class="text-[32px] font-bold leading-[38px] tracking-[-1px] text-text-primary transition-opacity duration-300 ease-in-out md:mb-12 md:text-5xl md:leading-[48px]">Let’s get to know you!</h1>
<div class="relative h-[360px] w-[360px] overflow-hidden rounded-[20px]">
<video src="https://hcdn.useholo.com/assets/application/step-1.webm" width="360" height="360" class="rounded-[20px] object-cover" autoplay="" loop="" playsinline="">
</video>
 </div>
 </div>
 </div>

<div class="flex w-full flex-col gap-6 rounded-2xl bg-background-accent-gray-bolder px-4 py-6 md:gap-12 md:p-12">
<div class="w-full flex-grow">
<div class="flex h-full w-full flex-col justify-center">
<div class="flex-grow mx-8 xxs:mx-12 mb-8 md:mb-0 md:mx-12">
<div class="RSPBprogressBar" style="height: 2px;">
<div class="RSPBstep" style="left: 0%; transition-duration: 300ms; transform: translateX(-50%) scale(1);">
<div class="flex h-[18px] w-[18px] items-center justify-center rounded-full border-[5px] border-solid border-background-accent-gray-bolder" style="background-color: black;">
<span class="mt-16 flex w-fit whitespace-pre text-center text-sm font-medium md:whitespace-nowrap text-text-primary">Personal
 information</span>
</div>
</div>
 
 <div class="RSPBstep" style="left: 50%; transition-duration: 300ms; transform: translateX(-50%) scale(1);">
<div class="flex h-[18px] w-[18px] items-center justify-center rounded-full border-[5px] border-solid border-background-accent-gray-bolder" style="background-color: rgb(209, 209, 219);">
<span class="mt-16 flex w-fit whitespace-pre text-center text-sm font-medium md:whitespace-nowrap text-text-secondary">Property
 information</span>
</div>
</div>

<div class="RSPBstep" style="left: 100%; transition-duration: 300ms; transform: translateX(-50%) scale(1);">
<div class="flex h-[18px] w-[18px] items-center justify-center rounded-full border-[5px] border-solid border-background-accent-gray-bolder" style="background-color: rgb(209, 209, 219);">
<span class="mt-16 flex w-fit whitespace-pre text-center text-sm font-medium md:whitespace-nowrap text-text-secondary">Explore
 mortgages</span>
</div>
</div>

<div class="RSPBprogression" style="background: linear-gradient(to right, black 0%, black 100%); width: 0%;">
    
</div>
</div>
</div>
</div>
</div>

 <div class="clear-start"></div><div class="w-full flex-grow"><form action="#" class="en-personal_information"><div class="mb-12"><div class="space-y-8 md:space-y-12"><div><div><h2 class="text-lg font-medium leading-[26px] text-text-primary md:text-2xl">Do you live in the UAE?</h2><div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5"><span class="text-sm leading-5">We can help you. Holo offers mortgage options for both scenarios. </span></div></div><div><div class="flex flex-col gap-3 md:flex-row"><label for="radio-RESIDENTresidenceStatus" class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3" style="border-color: rgb(108, 108, 137);"><input name="residenceStatus" type="radio" class="hidden" id="radio-RESIDENTresidenceStatus" value="RESIDENT"><span class="relative me-2.5 flex h-4 w-4 shrink-0 items-center justify-center rounded-full border border-current" style="border-color: rgb(108, 108, 137);"><span class="h-2 w-2 rounded-full transition-all duration-300" style="background-color: transparent;"></span></span><span class="whitespace-nowrap text-sm leading-[22px] text-[#6C6C89]">Yes, I’m a UAE resident</span></label><label for="radio-NON_RESIDENTresidenceStatus" class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3" style="border-color: rgb(108, 108, 137);"><input name="residenceStatus" type="radio" class="hidden" id="radio-NON_RESIDENTresidenceStatus" value="NON_RESIDENT"><span class="relative me-2.5 flex h-4 w-4 shrink-0 items-center justify-center rounded-full border border-current" style="border-color: rgb(108, 108, 137);"><span class="h-2 w-2 rounded-full transition-all duration-300" style="background-color: transparent;"></span></span><span class="whitespace-nowrap text-sm leading-[22px] text-[#6C6C89]">No, I live outside the UAE</span></label></div></div></div><div class="space-y-8 md:space-y-12"><div><div><h2 class="text-lg font-medium leading-[26px] text-text-primary md:text-2xl">Are you applying alone or with someone?</h2><div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5"><span class="text-sm leading-5">You can also apply with a co-borrower, like a spouse or family member. </span></div></div><div><div class="flex flex-col gap-3 md:flex-row"><label for="radio-ON_MY_OWNapplicantType" class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3" style="border-color: rgb(108, 108, 137);"><input name="applicantType" type="radio" class="hidden" id="radio-ON_MY_OWNapplicantType" value="ON_MY_OWN"><span class="relative me-2.5 flex h-4 w-4 shrink-0 items-center justify-center rounded-full border border-current" style="border-color: rgb(108, 108, 137);"><span class="h-2 w-2 rounded-full transition-all duration-300" style="background-color: transparent;"></span></span><span class="whitespace-nowrap text-sm leading-[22px] text-[#6C6C89]">On my own</span></label><label for="radio-WITH_SOMEONE_ELSEapplicantType" class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3" style="border-color: rgb(108, 108, 137);"><input name="applicantType" type="radio" class="hidden" id="radio-WITH_SOMEONE_ELSEapplicantType" value="WITH_SOMEONE_ELSE"><span class="relative me-2.5 flex h-4 w-4 shrink-0 items-center justify-center rounded-full border border-current" style="border-color: rgb(108, 108, 137);"><span class="h-2 w-2 rounded-full transition-all duration-300" style="background-color: transparent;"></span></span><span class="whitespace-nowrap text-sm leading-[22px] text-[#6C6C89]">With someone else</span></label></div></div></div><div><div><h2 class="text-lg font-medium leading-[26px] text-text-primary md:text-2xl">What is your current employment status?</h2><div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5"><span class="text-sm leading-5">Your work status helps us determine the best mortgage solutions for you. </span><div class="inline-block text-sm underline"><span class="cursor-pointer">Learn More</span></div></div></div><div><div class="flex flex-col gap-3 md:flex-row"><label for="radio-SALARIEDemploymentStatus" class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3" style="border-color: rgb(108, 108, 137);"><input name="employmentStatus" type="radio" class="hidden" id="radio-SALARIEDemploymentStatus" value="SALARIED"><span class="relative me-2.5 flex h-4 w-4 shrink-0 items-center justify-center rounded-full border border-current" style="border-color: rgb(108, 108, 137);"><span class="h-2 w-2 rounded-full transition-all duration-300" style="background-color: transparent;"></span></span><span class="whitespace-nowrap text-sm leading-[22px] text-[#6C6C89]">Salaried</span></label><label for="radio-SELF_EMPLOYEDemploymentStatus" class="flex h-[44px] w-full cursor-pointer items-center justify-start rounded-lg border bg-white p-3" style="border-color: rgb(108, 108, 137);"><input name="employmentStatus" type="radio" class="hidden" id="radio-SELF_EMPLOYEDemploymentStatus" value="SELF_EMPLOYED"><span class="relative me-2.5 flex h-4 w-4 shrink-0 items-center justify-center rounded-full border border-current" style="border-color: rgb(108, 108, 137);"><span class="h-2 w-2 rounded-full transition-all duration-300" style="background-color: transparent;"></span></span><span class="whitespace-nowrap text-sm leading-[22px] text-[#6C6C89]">Self-employed</span></label></div></div></div><div><div><h2 class="text-lg font-medium leading-[26px] text-text-primary md:text-2xl">What is your monthly income?</h2><div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5"><span class="text-sm leading-5">Lenders consider your income to determine your loan eligibility. This is before tax deductions. </span><div class="inline-block text-sm underline"><span class="cursor-pointer">Learn More</span></div></div></div><div class="w-full md:max-w-[428px]"><div class="flex flex-col gap-2"><label for="monthlyIncome" class="text-sm flex gap-1"></label><div class="relative w-full"><div class="absolute top-1/2 h-full -translate-y-1/2" style="inset-inline-start: 0px;"></div><input name="monthlyIncome" type="text" inputmode="numeric" class="min-h-[48px] w-full min-w-full appearance-none rounded-lg border border-border-neutral bg-white px-2 py-2 indent-2 focus:outline-none hover:focus:outline-none placeholder:text-text-secondary" value=""><div class="absolute top-1/2 h-full -translate-y-1/2" style="inset-inline-end: 0px;"><div class="flex h-full w-full items-center justify-center border-s border-border-neutral px-3 text-sm text-text-primary">AED</div></div></div></div></div></div><div><div><h2 class="text-lg font-medium leading-[26px] text-text-primary md:text-2xl">How old are you?</h2><div class="mb-6 mt-2 w-full text-sm leading-[18px] text-text-body md:leading-5"><span class="text-sm leading-5">Lenders use your age to determine loan terms and eligibility. </span></div></div><div class="w-full md:max-w-[428px]"><div class="flex flex-col gap-2"><label for="age" class="text-sm flex gap-1"></label><div class="relative w-full"><div class="absolute top-1/2 h-full -translate-y-1/2" style="inset-inline-start: 0px;"></div><input name="age" type="text" inputmode="numeric" class="min-h-[48px] w-full min-w-full appearance-none rounded-lg border border-border-neutral bg-white px-2 py-2 indent-2 focus:outline-none hover:focus:outline-none placeholder:text-text-secondary" value=""><div class="absolute top-1/2 h-full -translate-y-1/2" style="inset-inline-end: 0px;"><div class="flex h-full w-full items-center justify-center border-s border-border-neutral px-3 text-sm text-text-primary">YEARS</div></div></div></div></div></div></div></div></div><div class="flex items-center justify-end gap-6"><button class="flex items-center justify-center transition-transform rounded-lg bg-background-button-primary-gray text-text-button-primary hover:bg-background-button-primary-gray-hover disabled:bg-background-button-primary-gray-disabled disabled:text-text-button-primary-disabled h-14 px-6 text-base font-medium w-full md:w-fit en-mortgage-application-personal" id="lead-submit-button" type="button" style="background-color: black;"><span>Next step</span></button></div></form></div></div></div></div></div></div></div><button class="fixed bottom-12 right-8 z-50 hidden h-12 w-12 cursor-pointer rounded-full border border-natural-gray-2 bg-white hover:bg-slate-200"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" color="black" style="color:black;display:none" height="25" width="25" xmlns="http://www.w3.org/2000/svg"><path d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg></button><span id="__chakra_env" hidden=""></span></div>
@endsection