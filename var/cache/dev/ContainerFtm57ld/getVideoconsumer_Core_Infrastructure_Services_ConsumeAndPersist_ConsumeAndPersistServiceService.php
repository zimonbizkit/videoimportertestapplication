<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'videoconsumer.core.infrastructure.services.consume_and_persist.consume_and_persist_service' shared service.

return $this->services['videoconsumer.core.infrastructure.services.consume_and_persist.consume_and_persist_service'] = new \AppBundle\Core\Infrastructure\Service\ConsumeAndPersist\ConsumeAndPersistService(${($_ = isset($this->services['videoconsumer.shared_kernel.infrastructure.queue_service.rabbit_mq_queue_adapter_service']) ? $this->services['videoconsumer.shared_kernel.infrastructure.queue_service.rabbit_mq_queue_adapter_service'] : $this->services['videoconsumer.shared_kernel.infrastructure.queue_service.rabbit_mq_queue_adapter_service'] = new \AppBundle\SharedKernel\Infrastructure\Queue\Service\RabbitMqQueueAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['videoconsumer.core.infrastructure.service.process_video.process_video_service']) ? $this->services['videoconsumer.core.infrastructure.service.process_video.process_video_service'] : $this->load(__DIR__.'/getVideoconsumer_Core_Infrastructure_Service_ProcessVideo_ProcessVideoServiceService.php')) && false ?: '_'});