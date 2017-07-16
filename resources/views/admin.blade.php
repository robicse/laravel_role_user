@extends('layouts.master')
@section('title')
Admin Panel
@endsection
@section('content')
<section class="content">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Frist Name</th>
                    <th>Last Name</th>
                    <th>E-Mail</th>
                    <th>User</th>
                    <th>Author</th>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <form action="{{URL::to('/assign_roles')}}" method="post">
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                        <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked':''}} name="role_user" /></td>
                        <td><input type="checkbox" {{ $user->hasRole('Author') ? 'checked':''}} name="role_author" /></td>
                        <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked':''}} name="role_admin" /></td>
                        {{ csrf_field() }}
                        <td><button type="submit">Assign Role</button> </td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection

