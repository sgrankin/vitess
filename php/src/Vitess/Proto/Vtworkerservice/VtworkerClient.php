<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vtworkerservice.proto

namespace Vitess\Proto\Vtworkerservice {

  class VtworkerClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }
    /**
     * @param Vitess\Proto\Vtworkerdata\ExecuteVtworkerCommandRequest $input
     */
    public function ExecuteVtworkerCommand($argument, $metadata = array(), $options = array()) {
      return $this->_serverStreamRequest('/vtworkerservice.Vtworker/ExecuteVtworkerCommand', $argument, '\Vitess\Proto\Vtworkerdata\ExecuteVtworkerCommandResponse::deserialize', $metadata, $options);
    }
  }
}
