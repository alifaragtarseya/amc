@extends('dashboard.layouts.master')

@php
    $title = __('lang.packages');
@endphp

@section('title')
    {{ $title }}
@endsection


@section('content')

    @include('dashboard.layouts.includes.breadcrumb' , ['title' => $title])

    <div class="row pt-2">
        <div class="col-md-12">
           @component('dashboard.layouts.includes.card' )
               @slot('tool')
                   <a href="{{ route('admin.package.create') }}"   class="btn btn-primary d-grid float-end mb-2 ">
                    <i class="  bx bx-plus"> {{ __('lang.add')  }}</i>

                </a>
               @endslot

               @slot('content')
                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                           <td>{{ __('lang.name') }}</td>
                           <td>{{ __('lang.category') }}</td>
                           <td>{{ __('lang.description') }}</td>
                           {{-- <td>{{ __('lang.status') }}</td> --}}
                           <td>{{ __('lang.actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $item->title }}
                                        </td>
                                        <td>
                                            {{ isRtl()?optional($item->category)->title:optional($item->category)->title_en }}
                                        </td>
                                        <td>
                                            {{ $item->short_description }}
                                        </td>

                                        <td>
                                            <a href="{{ route('admin.package.edit',$item->id) }}"   class="btn  btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.package.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
                                        </td>
                                   </tr>
                               @endforeach
                           @else
                               <tr>
                                   <td colspan="4">
                                       <div class="text-center alert alert-warring">
                                           {{ __('lang.no_data_found') }}
                                       </div>
                                   </td>
                               </tr>
                           @endif
                       @endslot
                   @endcomponent
               @endslot
           @endcomponent
        </div>
    </div>

    <div class="modal fade table-modal" id="table-model" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
</div>
@endsection
@section('js')


@endsection
