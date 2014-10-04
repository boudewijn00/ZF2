<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Checklist\Controller\Checklist' => 'Checklist\Controller\ChecklistController',
        ),
    ),
    
    'router' => array(
        'routes' => array(
            'checklist' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/task',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Checklist\Controller',
                        'controller'    => 'Task',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                        )
                    )
                )
            )
        )
    ),
    
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);
