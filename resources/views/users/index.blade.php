@extends('layouts.admin')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="widget-container fluid-height clearfix">
            <div class="heading">
                <h1 class="pull-left">Users</h1>
                <a class="btn btn-primary pull-right" href="{!! route('admin.users.create') !!}">Add New</a>
            </div>
            <div class="widget-content padded clearfix">
                @if($users->isEmpty())
                    <div class="well text-center">No Users found.</div>
                @else
                    <div class="table-responsive">
                        @include('users.table')
                    </div>
                @endif
            </div>
            <div style="padding-left: 7px;">
                @include('common.paginate', ['records' => $users])

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

