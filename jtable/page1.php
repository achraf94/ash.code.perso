<link href="../assets/jtable.2.4.0/themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css"/>
<script src="../assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
<script src="../assets/jtable.2.4.0/jquery.ui.widget.js" type="text/javascript"></script>
<script src="../assets/jtable.2.4.0/jquery.jtable.min.js" type="text/javascript"></script>
<div id="PersonTableContainer"></div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#PersonTableContainer').jtable({
            title: 'Table of people',
            actions: {
                listAction: '/actions/PersonList',
                createAction: '/actions/CreatePerson',
                updateAction: '/actions/UpdatePerson',
                deleteAction: '/actions/DeletePerson'
            },
            fields: {
                PersonId: {
                    key: true,
                    list: false
                },
                Name: {
                    title: 'Author Name',
                    width: '40%'
                },
                Age: {
                    title: 'Age',
                    width: '20%'
                },
                RecordDate: {
                    title: 'Record date',
                    width: '30%',
                    type: 'date',
                    create: false,
                    edit: false
                }
            }
        });
        $('#PersonTableContainer').jtable('load');
    });
</script>