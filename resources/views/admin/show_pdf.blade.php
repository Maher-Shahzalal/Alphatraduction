@extends('_layouts.Master')

@section('title')
    {{ __('admin.Show PDF file') }}
@endsection

@section('content')
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
             <thead>
                <th>PDF</th>
                <th>{{ __('admin.Actions') }}</th>
             </thead>
             <tr>
                <td>
                     @foreach($PDF as $pdfs)
                  <iframe id="pdf-js-viewer" src="{{ asset('storage/'.$pdfs->pdf) }}"
                            title="webviewer" frameborder="0" width="500" height="600">
                   </iframe>
                </td>
             <td>
                  <form action="show_pdf/{{$pdfs->id}}/delete">
                     <button class="btn btn-danger btn-s">
                         {{ __('admin.Delete') }}
                    </button>
                  </form>
            </td>
         </tr>
            @endforeach
                </table>
            </div>
        </div>
    </div>
 </div>
@endsection('content')

