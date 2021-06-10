<form method="post">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3" center>
                <label for="num">Número 1</label>
                <input type="number" class="form-control" id="num" name="num" placeholder="123....">
            </div>
            <div class="col-md-3" center>
                <label for="num">Número 2</label>
                <input type="number" class="form-control" id="num2" name="num2" placeholder="123....">
                
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="operaciones">
                <option selected>Operación</option>
                <option value="1">Sumar</option>
                <option value="2">Restar</option>
                <option value="3">Multiplicar</option>
                <option value="4">Dividir</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-5">
            <button type="submit" class="btn btn-outline-info btn-lg" data-mdb-ripple-color="dark" name="calcular">
                Calcular
            </button>
        </div>
    </div>

</form>