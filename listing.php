<fieldset>
    <legend>Listing</legend>
    <div id="tableau">
    <table id="listing">
        <thead>
            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Mail</td>
                <td>Date de naissance</td>
                <td>Genre</td>
                <td>Nationalité</td>
                <td>Commentaire</td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</fieldset>
<div id="separator"></div>
<script>
    $(document).ready(function() {
        $('#listing').DataTable({
            "paging" : false,
            "ordering": true,
            "scrollX": true,
            "ajax": {
            "url": "data.json",
            "dataSrc": ""
            },
            "columns": [
            {"data": "user_nom"},
            {"data": "user_prenom"},
            {"data": "user_mail"},
            {"data": "datepicker"},
            {"data": "genre"},
            {"data": "origin"},
            {"data": "comment"}
            ]
            })
    });
</script>