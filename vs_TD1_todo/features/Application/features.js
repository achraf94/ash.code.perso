$(document).ready(function() {
  $("#Features").jtable({
    title: "Features",
    actions: {
      listAction: "../Actions.php?action=list&table=features",
      createAction: "../Actions.php?action=create&table=features",
      updateAction: "../Actions.php?action=update&table=features",
      deleteAction: "../Actions.php?action=delete&table=features"
    },
    fields: {
      Features_ID: {
        key: true,
        create: false,
        edit: false,
        list: false
      },
      apps_id: {
        title: "Application",
        width: "15%",
        options: "../Actions.php?action=appsJson",
        create: true,
        edit: true
      },
      type: {
        title: "Type Component",
        width: "20%",
        options: {
          "0": "Features",
          "1": "Model",
          "2": "Discovry",
          "3": "Data"
        },
        create: true,
        edit: true
      },
      Name_f: {
        title: "Name Component",
        width: "30%"
      },
      Date_create: {
        title: "Creation date",
        width: "20%",
        type: "date",
        displayFormat: "dd-mm-yy"
      },
      Owner_f: {
        title: "Owner",
        width: "20%",
        options: "../Actions.php?action=users",
        create: true,
        edit: true
      }
    }
  });

  $("#Features").jtable("load");
});
