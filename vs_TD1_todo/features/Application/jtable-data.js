$(document).ready(function() {
  $("#jtable-data").jtable({
    title: "Features Versionning",
    actions: {
      listAction: "../action2.php?action=list&table=component",
      createAction: "../action2.php?action=create&table=component",
      updateAction: "../action2.php?action=update&table=component",
      deleteAction: "../action2.php?action=delete&table=component"
    },
    fields: {
      Component_ID: {
        key: true,
        create: false,
        edit: false,
        list: false
      },
      //CHILD TABLE DEFINITION FOR "PHONE NUMBERS"
      Version: {
        title: "",
        width: "5%",
        sorting: false,
        edit: false,
        create: false,
        display: function(data) {
          //Create an image that will be used to open child table
          var $img = $(
            '<img src="../../assets/img/suivi.png" title="Edit version component" class="suiviclass"/>'
          );
          //Open child table when user clicks the image
          $img.click(function() {
            $("#jtable-data").jtable(
              "openChildTable",
              $img.closest("tr"),
              {
                title: data.record.Name + " - Version",
                actions: {
                  listAction:
                    "../action2.php?action=list&table=versionning&idComponent=" +
                    data.record.Component_ID,
                  deleteAction:
                    "../action2.php?action=delete&table=versionning",
                  updateAction:
                    "../action2.php?action=update&table=versionning",
                  createAction: "../action2.php?action=create&table=versionning"
                },
                fields: {
                  version_ID: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                  },
                  Component_ID: {
                    type: "hidden",
                    defaultValue: data.record.Component_ID
                  },
                  Name: {
                    title: "Name",
                    width: "12%"
                  },
                  Owner: {
                    title: "Owner",
                    width: "12%",
                    options: "../action2.php?action=usersJson"
                  },
                  model: {
                    title: "Model",
                    width: "12%",
                    options: { "1": "Développement ", "2": "Production" }
                  },
                  comments: {
                    title: "Comments",
                    width: "12%",
                    type: "textarea"
                  },
                  date_create: {
                    title: "Creation date",
                    width: "13%",
                    type: "date",
                    displayFormat: "dd-mm-yy",
                    create: false,
                    edit: false
                  }
                }
              }, function(data) {
                //opened handler
                data.childTable.jtable("load");
              });
          });
          return $img;
        }
      },
      Name: {
        title: "Name Component",
        width: "14%"
      },
      Owner: {
        title: "Owner",
        width: "12%",
        options: "../action2.php?action=usersJson"
      },
      model: {
        title: "Model",
        width: "10%",
        options: { "1": "Développement ", "2": "Production" }
      },
      type: {
        title: "Type Component",
        width: "12%",
        options: {
          "1": "Features ",
          "2": "Model",
          "3": "Data",
          "4": "Discovry"
        }
      },
      comments: {
        title: "Description",
        type: "textarea",
        width: "20%"
      },
      apps_id: {
        title: "Name Application",
        width: "10%",
        options: "../action2.php?action=appsJson"
      },
      date_create: {
        title: "Creation date",
        width: "13%",
        type: "date",
        displayFormat: "dd-mm-yy",
        create: false,
        edit: false
      }
    }
  });

  $("#jtable-data").jtable("load");
});
