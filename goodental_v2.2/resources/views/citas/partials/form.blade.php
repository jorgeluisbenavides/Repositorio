<div class="row">

      <div class="col-md-12 col-sm-4 col-xs-12 form-group has-feedback">
        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Folio">-->
        {{ Form::date('folio', null, ['class'=>'form-control has-feedback-left','placeholder'=>'Folio' , 'id'=>'folio']) }}
        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
      </div>                       
      
    </div>

    <div class="ln_solid"></div>

    <!--<button class="btn btn-primary" type="button">Cancelar</button>-->
    <button class="btn btn-primary" type="reset">Limpiar</button>
    <button type="submit" class="btn btn-success" disabled>Agregar</button>