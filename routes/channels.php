<?php

Broadcast::channel('online', function ($user) {
    if (auth()->check()){
        return $user->toArray();
    }
});