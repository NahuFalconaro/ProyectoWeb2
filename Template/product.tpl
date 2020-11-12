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
            <input type="hidden" name="idproducto" value="{$Product->id_product}">
            <label class="loged" id="{$logged}"></label>
            <label class="ids" id="{$Product->id_product}"></label>
            <div>
                {if $logged==0}
                    <form action="addComment" id="addComment"method="POST" class="form-inline" style="margin-top: 100px;">
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" name="comment" placeholder="comment">
                        </div>
                        <div class="form-group mx-sm-2 mb-2">
                            <input type="number" name="score" class="form-control"  placeholder="score">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">insertar</button>
                    </form>
                {/if}
                <section id="vue-comentarios">
                    {include file="./vue/vueComment.tpl"}
                </section>
            </div>
        </div>
    </div>
</div>
<script src="./js/comment.js"></script>
{*{include file='./footer.tpl'}*}