{include file='./header.tpl'}
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem; margin-top: 150px;">
                <img src="images/58f800703a91328fe6b19291714fb0bf.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$Product->nombre}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{$Product->price}</li>
                    <li class="list-group-item">{$Product->stock}</li>
                    <li class="list-group-item">{$Product->descripcion}</li>
                    <li class="list-group-item">{$Product->category}</li>

                </ul>
            </div>
        </div>
        <div class="col-8">
           
            <label class="loged" id="{$logged}"></label>
            <label class="ids" id="{$Product->id_product}"></label>
            <div>
                {if $logged==0}
                    <form id="form-comment" action="insert" method="post">
                    <div class="form-group">
                        <label for="title">Comment</label>
                        <input class="form-control" id="comment" name="input_comment" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Titulo de la Tarea</small>
                    </div>
                    <div class="form-group">
                        <label for="score">score</label>
                        <input class="form-control" id="score" name="input_score">
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>

                {/if}
                <section id="vue-comentarios">
                    {include file="./vue/vueComment.vue"}
                </section>
            </div>
        </div>
    </div>
</div>
<script src="./js/comment.js"></script>
{*{include file='./footer.tpl'}*}