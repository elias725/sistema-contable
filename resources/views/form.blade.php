<form action="{{ $action }}" method="POST">
    @csrf
    @if($method)
        @method($method)
    @endif

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="role_id">Rol</label>
        <select name="role_id" class="form-control">
            @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ isset($user) && $user->role_id == $role->id ? 'selected' : '' }}>
                    {{ $role->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="form-control" {{ isset($user) ? '' : 'required' }}>
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
</form>
