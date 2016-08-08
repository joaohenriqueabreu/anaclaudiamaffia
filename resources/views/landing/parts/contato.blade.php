<!--Contact Section-->
<section id="contato" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="container content-md g-heading-v7 text-center">
            <h2 class="h2 g-mb-70"><em class="block-name">Quer nos conhecer melhor?</em> Entre em contato!</h2>

            <!-- form and contatc information -->
            <div class="row">
                <div class="col-md-9 col-sm-6 form no-side-padding">
{{--                    {{ Form::open(['method'=>'POST','route'=>'mail.send', 'id'=>'sky-form3', 'class'=>'sky-form contact-style']) }}--}}
                    {{ Form::open(['method'=>'POST', 'route'=>'mail.send', 'id'=>'sky-form3', 'class'=>'sky-form contact-style', 'novalidate']) }}
                    <fieldset>
                        <div class="row margin-bottom-30">
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    {{ Form::text('name','',['id'=>'name', 'name'=>'name', 'placeholder'=>'Nome*','class'=>'form-control', 'required']) }}
                                </div>
                            </div>


                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    {{ Form::text('phone','',['id'=>'phone', 'name'=>'phone', 'placeholder'=>'Telefone*','class'=>'form-control', 'required']) }}
                                </div>
                            </div>

                        </div>
                        <div class="row margin-bottom-30">
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    {{ Form::email('email','',['id'=>'email', 'name'=>'email', 'placeholder'=>'Email*','class'=>'form-control', 'required']) }}
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    {{ Form::text('subject','',['id'=>'subject', 'name'=>'subject', 'placeholder'=>'Assunto*','class'=>'form-control', 'required']) }}
                                </div>
                            </div>
                        </div>

                        <div class="row margin-bottom-30">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        {{ Form::textarea('conteudo','',['id'=>'conteudo', 'name'=>'conteudo', 'rows'=>'4','placeholder'=>'Mensagem','class'=>'form-control g-textarea-noresize']) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row margin-bottom-30">
                            {{ Form::submit('Enviar', ['class' => 'btn-u btn-u-lg btn-u-bg-default btn-u-upper'])}}
                        </div>
                    </fieldset>

                    <div class="message">
                        <i class="rounded-x fa fa-check"></i>
                        <p>
                            Obrigado pelo contato! <br>
                            Mensagem enviada com sucesso.

                        </p>
                    </div>

                    {{ Form::close() }}

                </div>

                <div class="col-md-3 col-sm-6 contact-list">

                    <ul class="list-unstyled margin-bottom-30">
                        <li><span aria-hidden="true" class="icon-call-in icon"></span></li>
                        <li class="first-item">Telefone</li>
                        <li class="second-item">+55 31 98874 3836</li>
                    </ul>

                    <ul class="list-unstyled margin-bottom-30">
                        <li><span aria-hidden="true" class="icon-envelope-open icon"></span></li>
                        <li class="first-item">Email</li>
                        <li class="second-item">contato@anaclaudimaffia.com.br</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
<!--End of Contact Section-->