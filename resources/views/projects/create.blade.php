@extends('layout.master')
@section('parentPageTitle', 'Forms')
@section('title', 'Basic Elements')


@section('content')
<!-- Input -->
<form id="form_advanced_validation" method="POST" action="{{ route('projects.save') }}">
    @csrf
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Incluir novo projeto</strong> <small>Incluir um projeto para algum colaborador desenvolver por um tempo determinado</small> </h2>
            </div>
            <div class="body">
                <h2 class="card-inside-title">Projeto</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">                                    
                            <input type="text"  name="projectname" class="form-control" placeholder="Nome do projeto" />
                        </div>
                        <div class="form-group">                                   
                            <textarea rows="4" name="description" class="form-control" placeholder="Descrição"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="skill">Habilidades necessárias</label>
                            <select name="skill[]" class="form-control" placeholder="Habilidades necessárias " multiple>
                                <option value="php">PHP</option>
                                <option value="js">JS</option>
                                <option value="mysql">MYSQL</option>
                                <option value="aws">AWS</option>
                                <option value="docker">DOCKER</option>
                                <option value="projetos">PROJETOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="area">Área</label>
                            <select name="area" class="form-control" placeholder="Área">
                                <option value="skyhub">Skyhub</option>
                                <option value="esmart">BitTools/BitCommerce</option>
                                <option value="sieve">Sieve</option>
                                <option value="siteblindado">SiteBlindado</option>
                                <option value="direct">Direct</option>
                                <option value="marketplace">Marketplace</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Etapas -->
<div class="row clearfix etapas-projeto">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Etapas projeto</strong> <small>Incluir todas as etapas do projeto e para cada etapa selecionar quais funções serão necessarias</small> </h2>
            </div>
            <div class="body">
                <h2 class="card-inside-title">Etapas do projeto</h2>
                <div class="row clearfix">
                    <div class="col-sm-12 clone-step" id="step-0" step="0">
                        <div class="form-group etapas">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <input class="form-control" name="etapas[0][name]" type="text" placeholder="Etapa 1" />
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="etapas[0][datefrom]" class="form-control date" placeholder="Data inicio do projeto">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="etapas[0][dateto]" class="form-control date" placeholder="Data final do projeto">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6 clone-skill" skill="0">
                                    <div class="form-group skill">
                                        <input class="form-control" name="etapas[0][0]" type="text" placeholder="Função" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-success btn-add-skill" type="button" step="0" skill="0">
                                                <span class="glyphicon glyphicon-plus">Função</span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <span class="input-group-btn">
                                <button class="btn btn-success btn-add" type="button" step="0">
                                    <span class="glyphicon glyphicon-plus">Etapa</span>
                                </button>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix etapas-projeto">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
</form>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}">
<link rel="stylesheet" href="{{ asset('https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('assets/plugins/momentjs/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datetimepicker/moment-with-locales.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>

<script src="{{ asset('assets/js/pages/forms/advanced-form-elements-basic.js') }}"></script>
<script type="text/javascript">
    $(function()
    {
        $(document).on('click', '.btn-add', function(e)
        {
            console.log($(this).attr('step'));
            e.preventDefault();
            var currentStep = parseInt($(this).attr('step')),
                nextStep = currentStep+1;
                stepClone = $('#step-'+currentStep).html();

            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
            stepClone = stepClone.replace('step="'+currentStep+'"', 'step="'+nextStep+'"');
                stepClone = stepClone.replace('step-'+currentStep, 'step'+nextStep);
                stepClone = stepClone.replace('Etapa '+nextStep, 'Etapa '+parseInt(nextStep+1));
                stepClone = stepClone.replace('etapas['+currentStep+']', 'etapas['+nextStep+']');
            stepClone = stepClone.replace('etapas['+currentStep+']', 'etapas['+nextStep+']');
            stepClone = stepClone.replace('etapas['+currentStep+']', 'etapas['+nextStep+']');
            stepClone = stepClone.replace('etapas['+currentStep+']', 'etapas['+nextStep+']');
            stepClone = stepClone.replace('etapas['+currentStep+']', 'etapas['+nextStep+']');
            stepClone = stepClone.replace('etapas['+currentStep+']', 'etapas['+nextStep+']');
            stepClone = stepClone.replace('etapas['+currentStep+']', 'etapas['+nextStep+']');

                var html = '<div class="col-sm-12 clone-step" id="step-'+nextStep+'" step="'+nextStep+'"></div>';
                $('#step-'+currentStep).after(html);
                $('#step-'+nextStep).append(stepClone);



                var newSkill = $('#step-'+nextStep).find('.skill');

                for(i=0;newSkill.length>i; i++ ) {
                    if(i > 0) {
                        $(newSkill[i]).remove();
                    } else {
                        $(newSkill[i]).find('button').removeClass('btn-remove-skill').addClass('btn-add-skill')
                            .removeClass('btn-danger').addClass('btn-success')
                            .html('<span class="glyphicon glyphicon-plus">Habilidade</span>');
                    }
                }
                $(this).removeClass('btn-add').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="glyphicon glyphicon-minus"></span>');
        }).on('click', '.btn-remove', function(e)
        {
            var currentStep = parseInt($(this).attr('step')),
                nextStep = currentStep+1;
            $('#step-'+nextStep).remove();
            $(this).removeClass('btn-remove').addClass('btn-add')
                .removeClass('btn-danger').addClass('btn-success')
                .html('<span class="glyphicon glyphicon-plus">Etapa</span>');
            e.preventDefault();
            return false;
        });


        $(document).on('click', '.btn-add-skill', function(e)
        {
            e.preventDefault();
            var skillClone = $(this).parent().parent()[0].outerHTML,
                currentStep2 = parseInt($(this).attr('step')),
                currentSkill = parseInt($(this).attr('skill')),
                nextSkill = currentSkill+1,
                nextStep2 = currentStep2+1;

            skillClone = skillClone.replace('skill="'+currentSkill+'"', 'skill="'+nextSkill+'"');
            skillClone = skillClone.replace('etapas['+currentStep2+']['+currentSkill+']', 'etapas['+currentStep2+']['+nextSkill+']');


            $(this).parent().parent().after(skillClone);

            $(this).removeClass('btn-add-skill').addClass('btn-remove-skill')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="glyphicon glyphicon-minus"></span>');
        }).on('click', '.btn-remove-skill', function(e)
        {
            $(this).parent().parent().remove();
            $(this).removeClass('btn-remove-skill').addClass('btn-add-skill')
                .removeClass('btn-danger').addClass('btn-success')
                .html('<span class="glyphicon glyphicon-plus">Habilidade</span>');
            e.preventDefault();
            return false;
        });



    });

</script>
<style>
    .form-group.skill .form-control {
        width: auto !important;
        float: left;
    }

    .form-group.skill {
        margin: 20px 0px 20px 50px;
    }

    .form-group.skill button.btn-add-skill {
        padding: 5px .7rem 10px .7rem;
    }

    .form-group.etapas > span.input-group-btn button.btn-add {
        padding: 5px .7rem 10px .7rem;
    }
</style>
@stop