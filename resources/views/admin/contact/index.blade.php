@extends('layouts.app')
@section('title','02 || Dashboard')
@section('content')
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $index => $contact)
                      <tr>
                        <td>{{ $index + 1}}</td>
                        <td>{{ $contact->email}}</td>
                        <td>{{ $contact->pesan}}</td>
                        <td>
                            <a href="{{route('contact.edit', $contact->id)}}"><i class="fas fa-edit"></i></a>
                            <a href="{{route('contact.destroy', $contact->id)}}"><i class="fas fa-backspace" style="color:red"></i></a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- {'{ $contacts->links()}} harus pake paginate di controllernya -->
            {{$contacts->links()}}
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection