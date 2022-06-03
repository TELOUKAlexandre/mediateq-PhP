<h1>Recherche avancée dans le catalogue de la Médiathèque</h1>

<!-- <div class ="form">
    <form method="post" action="?action=rechercheAvancée">
    <select class="formTitre">
        <option value="Titre">Titre</option>   
    </select>
</div>
</br>
<div class ="formMots">
    <form method="post" action="?action=rechercheAvancée">
    <select name="formMots">
        <option value="mots">Tous les mots</option>   
    </select>
</div>
</br>
<div class ="formEt">
    <form method="post" action="?action=rechercheAvancée">
    <select name="formEt">
        <option value="et">Et</option>
        <option value="ou">Ou</option>
        <option value="sauf">Sauf</option>   
    </select>
</div>
</br>
<div class ="form">
    <form method="post" action="?action=rechercheAvancée">
    <select name="formAuteur">
         <option value="Auteur">Auteur</option>   
    </select>
</div>
</br>
<div class ="formMots">
    <form method="post" action="?action=rechercheAvancée">
    <select name="formMots">
        <option value="mots">Tous les mots</option>   
    </select>
</div>
</br>
<div class ="formEt">
    <form method="post" action="?action=rechercheAvancée">
    <select name="formEt">
        <option value="et">Et</option>
        <option value="ou">Ou</option>
        <option value="sauf">Sauf</option>   
    </select>
</div>
</br>
<div class ="form">
    <form method="post" action="?action=rechercheAvancée">
    <select name="formSujet">
         <option value="Sujet">Sujet</option>   
    </select>
</div>
</br>
*/
<div class ="formMots">
    <form method="post" action="?action=rechercheAvancée">
    <select name="formMots">
        <option value="mots">Tous les mots</option>   
    </select>
</div>
-->


<br/>

<div class="card">
    <div class="card-body">
        <form method="POST" action="?action=rechercheSimple">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <select class="form-control" name="titre1" id="searchType" required >
                        <option value="tout" selected>Titre</option>
                        <option value="livre" >Auteur</option>
                        <option value="dvd" >Sujet</option>
                        <option value="revue" >Editeur</option>
                    </select>
                </div>
               
                <div class="form-group col-md-7">
                    <input id="searchText" name="search1" class="form-control" placeholder="Saisissez les termes de votre recherche." type="text">
                </div>
                <div class="form-row">
                <div class="form-group col-md-2">
                    <select class="form-control" name="et1" id="searchType" required >
                        <option value="tout" selected>Et</option>
                        <option value="livre" >Ou</option>
                        <option value="dvd" >Sauf</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <select class="form-control" name="titre2" id="searchType" required >
                        <<option value="tout" selected>Auteur</option>
                        <option value="livre" >Titre</option>
                        <option value="dvd" >Sujet</option>
                        <option value="revue" >Editeur</option>
                    </select>
                </div>
               
                <div class="form-group col-md-6">
                    <input id="searchText" name="search2" class="form-control" placeholder="Saisissez les termes de votre recherche." type="text">
                </div>
                <div class="form-row">
                <div class="form-group col-md-2">
                    <select class="form-control" name="et2" id="searchType" required >
                        <option value="tout" selected>Et</option>
                        <option value="livre" >Ou</option>
                        <option value="dvd" >Sauf</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <select class="form-control" name="titre3" id="searchType" required >
                    <option value="tout" selected>Sujet</option>
                        <option value="livre" >Auteur</option>
                        <option value="dvd" >Titre</option>
                        <option value="revue" >Collection</option>
                        <option value="revue" >Editeur</option>
                    </select>
                </div>
                <!--<div class="form-group col-md-2">
                    <select class="form-control" name="searchType" id="searchType" required >
                        <option value="tout" selected>Tous les mots</option>
                    </select>
                </div> -->
                <div class="form-group col-md-5">
                    <input id="searchText" name="search3" class="form-control" placeholder="Saisissez les termes de votre recherche." type="text">
                </div>
</br>
                <div class="form-group col-md-3">
                    <button type="submit" name="effacer" class="btn btn-primary col-md-12"><span class="glyphicon glyphicon-floppy-disk"></span> Effacer</a>
                    <button type="submit" name="rechercheAvance" class="btn btn-primary col-md-12"><span class="glyphicon glyphicon-floppy-disk"></span> Recherche</a>
                </div>
            </div>
        </form>
    </div>
</div>
