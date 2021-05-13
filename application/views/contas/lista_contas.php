<div class="container">
<!-- Collapse buttons -->
<div class = "mt-4">
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Nova Conta
  </a>

<!-- / Collapse buttons -->

<!-- Collapsible element -->
<div class="collapse" id="collapseExample">
<div class="row">
        <div class="col-md-6 mx-auto border mt-5 pt-3 pb-3">
            <form method="POST" id="contas-form">

                <input class="form-control" name="parceiro" type="text" placeholder="Devedor/ Credor"><br>
                <input class="form-control" name="descricao" type="text" placeholder="Descrição"><br>
                <input class="form-control" name="valor" type="Number" placeholder="Valor"><br><br>
                <input type="hidden" name="tipo" value="<?= $tipo ?>"><br>

                <div class = "row">
                    <div class = "col-md-6">
                        <input class = "form-control" name="mes" type="number" placeholder="Mês">
                    </div>
                    <div class = "col-md-6">
                        <input class = "form-control" name ="ano" type="number" placeholder="Ano">
                    </div>
                </div>

                <input type="hidden" name="tipo" value= "<?= $tipo ?>"><br><br>


                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contas-form').submit();">Enviar</a>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- / Collapsible element -->
   

    <div class = "row mt-5">
        <div class = "col">
           <?= $lista ?>
        </div>
     </div> 

</div>