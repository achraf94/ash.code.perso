$(document).ready(function() {

    $("#suiviv").jtable({
      title: "Versionning",
      actions: {
        listAction: "../Actions.php?action=list&table=suivi",
        createAction: "../Actions.php?action=create&table=suivi",
        updateAction: "../Actions.php?action=update&table=suivi",
        deleteAction: "../Actions.php?action=delete&table=suivi"
      },
      fields: {
        version_ID: {
          key: true,
          create: false,
          edit: false,
          list: false
        },
        ID_creator_f: {
          title: "Features origin",
          options:"../Actions.php?action=features",
          width: "20%"
        },
        ID_modifier_f: {
            title: "Features updated",
            options:"../Actions.php?action=features",
            width: "20%"
        },
        model: {
          title: "Model",
          width: "10%",
          options:{ '1': 'Développement ', '2': 'Production' }
        } ,
        comments: {
            title: "Comments",
            type :"textarea",
            width: "20%"
        },
        date_create: {
            title: "Creation date",
            width: "20%",
            type: "date",
            displayFormat: 'dd-mm-yy'
          }
       
      }
    });
  

    $("#suiviv").jtable("load");
  });
  