<div class="container">
    <div class="col-md-12">
        <form action="{{ route('usuarios.store')}}" class="form-horizontal" method="POST">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label> ID </label>
                    <input type="text" class="form-control" name="id">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> nome </label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> username </label>
                    <input type="text" class="form-control" name="username">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> email </label>
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> street </label>
                    <input type="text" class="form-control" name="street">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> suite </label>
                    <input type="text" class="form-control" name="suite">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> city </label>
                    <input type="text" class="form-control" name="city">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> zipcode </label>
                    <input type="text" class="form-control" name="zipcode">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> geolat </label>
                    <input type="text" class="form-control" name="geolat">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> geolng </label>
                    <input type="text" class="form-control" name="geolng">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> phone </label>
                    <input type="text" class="form-control" name="phone">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> website </label>
                    <input type="text" class="form-control" name="website">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> compname </label>
                    <input type="text" class="form-control" name="compname">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> catchphrase </label>
                    <input type="text" class="form-control" name="catchphrase">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label> bs </label>
                    <input type="text" class="form-control" name="bs">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <button type="submit" class="btn btn-defalt"> Cadastrar </button>
                </div>
            </div>

        </form>
    </div>
</div>