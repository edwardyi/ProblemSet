<?php
namespace ProblemSets;
class CallBack {
    public function action($object ,callable $callback) {
      return call_user_func($callback);
    }
}
