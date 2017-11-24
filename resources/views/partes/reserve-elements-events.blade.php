<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center"><h2>Reserva de elementos para eventos</h2></legend>
        <br>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Seleccione tipo de elemento</label>
            <div class="col-md-4">
                <select id="selectbasic" name="selectbasic" class="form-control input-md">
                    <option value="">Elemento 1</option>
                    <option value="">Elemento 2</option>
                    <option value="">Elemento 3</option>
                    <option value="">Elemento 4</option>
                </select>
            </div>
        </div>


        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Seleccione cantidad</label>
            <div class="col-md-4">
                <input type="number" placeholder="    cantidad">
            </div>
        </div>


        <!-- Fecha-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Fecha de alquiler</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="date" class="form-control input-md" required="">

            </div>
        </div>


        <!-- Fecha-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Fecha de devolución</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="date" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Valor alquiler</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder=" Valor" class="form-control input-md" required="">
            </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <a id="submit" name="submit" class="btn btn-primary" href="{{asset('')}}">Agregar</a>
                <a id="submit" name="submit" class="btn btn-default" href="{{asset('')}}">Cancelar</a>

            </div>
        </div>

    </fieldset>
</form>
<br>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">

                <legend style="text-align: center"><h2>Datos de reserva</h2></legend>
                <br>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">

                                    <form role="form">
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">
                                                Elementos
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" disabled/>
                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">
                                                Total a pagar
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" disabled/>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-6">

                                    <form role="form">
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">
                                                Fecha de préstamo
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" disabled/>
                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">
                                                Fecha de devolución
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" disabled/>
                                        </div>

                                    </form>

                                </div>

                                <a id="jll" name="submit" class="col-md-3 btn btn-primary" href="{{asset('')}}">Reservar</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>