<?php
return [
    'debug' => true
];
?>


<?php


c::set('logger.roles', ['admin']);
c::set('logger.entries', 50);
c::set('logger.language', 'en');
c::set('logger.translation', [
  'site.update'  => 'Changed site options',
  'page.create'  => 'Created page %s',
  'page.update'  => 'Updated page %s',
  'page.delete'  => 'Deleted page %s',
  'page.sort'    => 'Sorted page %s',
  'page.hide'    => 'Hid page %s',
  'page.move'    => 'Moved page %1$s to %2$s',
  'file.upload'  => 'Uploaded file %s',
  'file.replace' => 'Replaced file %s',
  'file.rename'  => 'Renamed file %s',
  'file.update'  => 'Updated file %s',
  'file.sort'    => 'Sorted file %s',
  'file.delete'  => 'Deleted file %s',
  'user'         => 'User',
  'date'         => 'Date',
  'time'         => 'Time',
  'action'       => 'Action'
]); 




return [
  'routes' => [
    [
      'pattern' => 'logout',
      'action'  => function() {

        if ($user = kirby()->user()) {
          $user->logout();
        }

        go('login');

      }
    ]
  ]
];




?>

