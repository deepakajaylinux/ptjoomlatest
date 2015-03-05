<?php

Namespace Core ;

class AutoPilotConfigured extends AutoPilot {

    public $steps ;

    public function __construct() {
        $this->setSteps();
    }

    /* Steps */
    private function setSteps() {

        include("settings.php") ;

        $this->steps =
            array(
                array ( "Logging" => array( "log" => array( "log-message" => "Lets begin Configuration of a medium set of environments"),),),

                // Bastion
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add a Bastion Box" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "prod",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "prod",
                    "provider-name" => $provider,
                    "box-amount" => $box_amount,
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),

                // Git
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add a GitBucket Box" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "medium-git",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "medium-git",
                    "provider-name" => $provider,
                    "box-amount" => $box_amount,
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),

                // Jenkins
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add a Jenkins Box" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "medium-jenkins",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "medium-jenkins",
                    "provider-name" => $provider,
                    "box-amount" => $box_amount,
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),

                // Staging Primary DB
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add a Staging Primary DB" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "medium-staging-db-balancer",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "medium-staging-db-balancer",
                    "provider-name" => $provider,
                    "box-amount" => $box_amount,
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),

                // Staging DB Nodes
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add Staging DB Nodes" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "medium-staging-db-nodes",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "medium-staging-db-nodes",
                    "provider-name" => $provider,
                    "box-amount" => "2",
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),

                // Staging Web Nodes
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add Staging Web Nodes" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "medium-staging-web-nodes",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "medium-staging-web-nodes",
                    "provider-name" => $provider,
                    "box-amount" => "2",
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),

                // Staging Load Balancer
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add a Staging Load Balancer" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "medium-staging-load-balancer",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "medium-staging-load-balancer",
                    "provider-name" => $provider,
                    "box-amount" => $box_amount,
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),

                // Production Primary DB
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add a Production Primary DB" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "medium-prod-db-balancer",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "medium-prod-db-balancer",
                    "provider-name" => $provider,
                    "box-amount" => $box_amount,
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),

                // Production DB Nodes
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add Production DB Nodes" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "medium-prod-db-nodes",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "medium-prod-db-nodes",
                    "provider-name" => $provider,
                    "box-amount" => "2",
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),


                // Production Web Nodes
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add Production Web Nodes" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "medium-prod-web-nodes",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "medium-prod-web-nodes",
                    "provider-name" => $provider,
                    "box-amount" => "2",
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),

                // Production Load Balancer
                array ( "Logging" => array( "log" => array( "log-message" => "Lets add a Production Load Balancer" ),),),
                array ( "EnvironmentConfig" => array("configure" => array(
                    "guess" => true,
                    "environment-name" => "medium-prod-load-balancer",
                    "tmp-dir" => "/tmp/",
                    "keep-current-environments" => true,
                    "no-manual-servers" => true,
                    "add-single-environment" => true,
                ),),),
                array ( "Boxify" => array("box-add" => array(
                    "guess" => true,
                    "environment-name" => "medium-prod-load-balancer",
                    "provider-name" => $provider,
                    "box-amount" => $box_amount,
                    "image-id" => $image_id,
                    "region-id" => $region_id,
                    "size-id" => "$size_id",
                    "server-prefix" => $prefix,
                    "box-user-name" => $user_name,
                    "ssh-key-name" => "$ssh_key_name",
                    "private-ssh-key-path" => "$priv_ssh_key",
                    "wait-for-box-info" => true,
                ),),),

                array ( "Logging" => array( "log" => array( "log-message" => "Configuring a medium set of environments complete"),),),

            );

    }

}
