$(document).ready(function() {

  $("#application").jtable({
    title: "Application",
    actions: {
      listAction: "../Actions.php?action=list&table=apps",
      createAction: "../Actions.php?action=create&table=apps",
      updateAction: "../Actions.php?action=update&table=apps",
      deleteAction: "../Actions.php?action=delete&table=apps"
    },
    fields: {
      Apps_ID: {
        key: true,
        create: false,
        edit: false,
        list: false
      },
      Name_a: {
        title: "Name Application",
        width: "40%"
      },
      Created_by: {
        title: "Created By",
        width: "20%",
        options:"../Actions.php?action=users",
        create: true,
        edit: true    
      },     
      Date_create: {
        title: "Creation date",
        width: "30%",
        type: "date",
        displayFormat: 'dd-mm-yy'
      }
    }
  });

  $("#application").jtable("load");
});
