@extends('layouts.app')
@section('slot')
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('uts.store') }}" method="POST">
                @csrf
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">

                        <div class="mb-5">
                            <label for="nama" class="mb-3 block text-base font-medium text-[#07074D]">
                                Nama
                            </label>
                            <input type="text" name="nama" id="nama" placeholder="nama"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="npm" class="mb-3 block text-base font-medium text-[#07074D]">
                                NPM
                            </label>
                            <input type="string" name="npm" id="npm" placeholder="npm"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="alamat" class="mb-3 block text-base font-medium text-[#07074D]">
                        Alamat
                    </label>
                    <input type="text" name="alamat" id="alamat" placeholder="5" min="0"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div>
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                        type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
