<?php


namespace Wwjpackages\CloudFinance\Organization;


use Wwjpackages\CloudFinance\Kernel\BaseService;

class Service extends BaseService
{
	const SyncEmployee = '/api/api/organizations/employees/sync';

	public function syncEmployee(array $data): array
	{
		$params = [
			'real_name' => $data['real_name'],
			'employee_no' => $data['employee_no'],
			'organization_name' => $data['organization_name'],
			'job_title' => $data['job_title'],
			'id_card' => $data['id_card'],
			'mobile' => $data['mobile'],
			'status' => $data['status'],
			'comments' => $data['comments'],
		];
		return $this->attempt('post', self::SyncEmployee, $params);
	}
}