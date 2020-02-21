<div class="container">
    <div class="col-md-12">

        <form action="{{ route('usuarios.update', ['usuario' => $usuarios['id']])}}" class="form-horizontal" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group">
                    <label> ID </label>
                    <input type="text" class="form-control" name="id" value="{{old('usuario', $usuarios['id'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> nome </label>
                    <input type="text" class="form-control" name="name" value="{{old('usuario', $usuarios['name'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> username </label>
                    <input type="text" class="form-control" name="username" value="{{old('usuario', $usuarios['username'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> email </label>
                    <input type="text" class="form-control" name="email" value="{{old('usuario', $usuarios['email'])}}">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label> street </label>
                    <input type="text" class="form-control" name="street" value="{{old('usuario', $usuarios['street'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> suite </label>
                    <input type="text" class="form-control" name="suite" value="{{old('usuario', $usuarios['suite'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> city </label>
                    <input type="text" class="form-control" name="city" value="{{old('usuario', $usuarios['city'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> zipcode </label>
                    <input type="text" class="form-control" name="zipcode" value="{{old('usuario', $usuarios['zipcode'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> geolat </label>
                    <input type="text" class="form-control" name="geolat" value="{{old('usuario', $usuarios['geolat'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> geolng </label>
                    <input type="text" class="form-control" name="geolng" value="{{old('usuario', $usuarios['geolng'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> phone </label>
                    <input type="text" class="form-control" name="phone" value="{{old('usuario', $usuarios['phone'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> website </label>
                    <input type="text" class="form-control" name="website" value="{{old('usuario', $usuarios['website'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> compname </label>
                    <input type="text" class="form-control" name="compname" value="{{old('usuario', $usuarios['compname'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> catchphrase </label>
                    <input type="text" class="form-control" name="catchphrase" value="{{old('usuario', $usuarios['catchphrase'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> bs </label>
                    <input type="text" class="form-control" name="bs" value="{{old('usuario', $usuarios['bs'])}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <button type="submit" class="btn btn-defalt"> salvar </button>
                </div>
            </div>
        </form>
    </div>
</div>