@extends('layout.master')

@section('content')
    <!-- Section-->
    <section class="py-5">
        <div class="div text-center">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 text-center">
                @foreach ($category as $ctg)
                <div class="bg-white text-center">
                    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                      <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 text-center">
                        <div class="group relative text-center">
                          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                          </div>
                          <div class="mt-2 flex justify-between">
                            <div>
                              <h3 class="text-sm text-gray-700 text-center">
                                <a href="#">
                                  <span aria-hidden="true" class="absolute inset-0"></span>
                                  {{$ctg->name}}
                                </a>
                                <p class="text-sm font-medium text-gray-900">{{$ctg->harga}}</p>
                            </div>
                              </h3>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
