<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/duckchat_user_profile.proto

namespace GPBMetadata\Plugin;

class DuckchatUserProfile
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Core\User::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad5010a22706c7567696e2f6475636b636861745f757365725f70726f66" .
            "696c652e70726f746f1206706c7567696e222c0a1a4475636b4368617455" .
            "73657250726f66696c6552657175657374120e0a06757365724964180120" .
            "01280922440a1b4475636b436861745573657250726f66696c6552657370" .
            "6f6e736512250a0770726f66696c6518012001280b32142e636f72652e41" .
            "6c6c5573657250726f66696c65422b0a15636f6d2e7a616c792e70726f74" .
            "6f2e706c7567696eca02115a616c795c50726f746f5c506c7567696e6206" .
            "70726f746f33"
        ));

        static::$is_initialized = true;
    }
}

