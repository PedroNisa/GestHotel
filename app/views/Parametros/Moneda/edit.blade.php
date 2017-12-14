
<!!-- EDITA LA O LAS MONEDAS EN USO PARA LA APLICACIÓN -->

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> NUEVA MONEDA
    </div>
    <br>

    <h4>
        <a href="{{URL::to('sistema/parametros/moneda')}}" class="get-list" style="padding: 2%">
            <span class="label label-primary">Volver a Listado </span>
        </a>
    </h4>
    <div class="card-body">
        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-md-12">
                    {{ Form::open(array('url' =>
                    'sistema/parametros/moneda/'.$Moneda->id,'method'=>'put','class'=>'form-horizontal form-new-item'))
                    }}
                    <div class="form-group">
                        {{Form::label('nombre', 'Nombre',['class'=>'col-sm-3 control-label'])}}
                        <div class="col-sm-4">
                            {{ Form::text('nombre',$Moneda->nombre,['class'=>'form-control'])}}
                            <span class="error">{{ $errors->first('nombre')}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('pais', 'País',['class'=>'col-sm-3 control-label'])}}
                        <div class="col-sm-4">
                            {{ Form::text('pais',$Moneda->pais,['class'=>'form-control'])}}
                            <span class="error">{{ $errors->first('pais')}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('simbolo', 'Símbolo',['class'=>'col-sm-3 control-label'])}}
                        <div class="col-sm-4">
                            {{ Form::text('simbolo',$Moneda->simbolo,['class'=>'form-control'])}}
                            <span class="error">{{ $errors->first('simbolo')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-12">
                            {{ Form::submit('Guardar',['id'=>'btn-submit', 'class'=>'btn btn-success'])}}
                            <a class="btn btn-danger btn-close" href="{{ URL::previous() }}">Cancelar</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
