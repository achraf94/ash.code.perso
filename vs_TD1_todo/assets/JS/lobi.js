$(function () {
    $('#todo-lists-basic-demo').lobiList({
        lists: [
            {
                id: 'todo',
                title: 'TODO',
                defaultStyle: 'lobilist-info',
                items: [
                    {
                        title: 'Floor cool cinders',
                        description: 'Thunder fulfilled travellers folly, wading, lake.',
                        dueDate: '2015-01-31'
                    },
                    {
                        title: 'Periods pride',
                        description: 'Accepted was mollis',
                        done: true
                    },
                    {
                        title: 'Flags better burns pigeon',
                        description: 'Rowed cloven frolic thereby, vivamus pining gown intruding strangers prank treacherously darkling.'
                    },
                    {
                        title: 'Accepted was mollis',
                        description: 'Rowed cloven frolic thereby, vivamus pining gown intruding strangers prank treacherously darkling.',
                        dueDate: '2015-02-02'
                    }
                ]
            }
        ]
    });
});