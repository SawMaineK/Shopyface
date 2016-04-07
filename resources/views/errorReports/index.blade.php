@extends('layouts.admin')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="widget-container fluid-height clearfix">
            <div class="heading">
                <h1 class="pull-left">ErrorReports</h1>
                <a class="btn btn-primary pull-right" href="{!! route('admin.errorReports.create') !!}">Add New</a>
            </div>
            <div class="widget-content padded clearfix">
                @if($errorReports->isEmpty())
                    <div class="well text-center">No ErrorReports found.</div>
                @else
                    <div class="table-responsive">
                        @include('errorReports.table')
                    </div>
                @endif
            </div>
            <div style="padding-left: 7px;">
                @include('common.paginate', ['records' => $errorReports])

            </div>
        </div>

    </div>

@endsection

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')

    <script type="text/javascript">
        $('.dataTable').dataTable({
            "bPaginate": false,
            "bInfo": false
        });
    </script>

@stop

