<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\SettingsLang;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
	public function index()
	{
		$breadcrumb = [
			["name" => "Settings", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
			["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

		];
		populate_breadcrumb($breadcrumb);
		$Settings = SettingsLang::where('lang', getDefultAdminLanguage())->get();

		// dump($Settings[0]);
		// $Settings = chnageColumnAccordingToLanguage($Settings, 'langSettings', ['option_value']);
		return view('admin.settings.index', compact('Settings'));
	}

	public function update(Request $request)
	{
		$request->request->remove('_token'); // to remove property from $request
		$input = $request->all();

		foreach ($input as $key => $value) {
			if ($key == 'logo') {
				if ($request->hasFile('logo')) {
					$image = '';
					$uploadpath = public_path() . '\images';
					//$original_name = $input['image']->getClientOriginalName();
					$original_name = $request->file('logo')->getClientOriginalName();

					if (!empty($request->file('logo'))) {
						$image_prefix = 'logo_' . rand(0, 999999999) . '_' . date('d_m_Y_h_i_s');
						$ext = $request->file('logo')->getClientOriginalExtension();

						$image = $image_prefix . '.' . $ext;
						//$image_array[] = $image;
						$request->file('logo')->move($uploadpath, $image);
					}
					//}
					$value = $image;
				} else {
					$value = $request->image_bk;
				}
			}

			$result = Settings::updateOrCreate(['option_name' => $key], [
				'option_name' => $key,
				'option_value' => $value,
			]);

			SettingsLang::updateOrCreate(['settings_id' => $result->id, 'lang' => getDefultAdminLanguage()], [
				'settings_id' => $result->id,
				'lang' => getDefultAdminLanguage(),
				'option_name' => $key,
				'option_value' => $value,
			]);
		}

		return back()->withInput(array('msg' => 'Setting Updated Successfully'));
	}


	public function headerSetting()
	{
		$breadcrumb = [
			["name" => "Settings", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
			["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

		];
		populate_breadcrumb($breadcrumb);
		$Settings = SettingsLang::where('lang', getDefultAdminLanguage())->get();
		return view('admin.settings.headerSetting', compact('Settings'));
	}

	public function headerSettingUpdate(Request $request)
	{
		$request->request->remove('_token'); // to remove property from $request
		$input = $request->all();

		foreach ($input as $key => $value) {

			$result = Settings::updateOrCreate(['option_name' => $key], [
				'option_name' => $key,
				'option_value' => $value,
			]);

			SettingsLang::updateOrCreate(['settings_id' => $result->id, 'lang' => getDefultAdminLanguage()], [
				'settings_id' => $result->id,
				'lang' => getDefultAdminLanguage(),
				'option_name' => $key,
				'option_value' => $value,
			]);
		}



		return back()->withInput(array('msg' => 'Setting Updated Successfully'));
	}

	public function footerSetting()
	{
		$breadcrumb = [
			["name" => "Settings", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
			["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

		];
		populate_breadcrumb($breadcrumb);

		$Settings = SettingsLang::where('lang', getDefultAdminLanguage())->get();
		return view('admin.settings.footerSetting', compact('Settings'));
	}

	public function footerSettingUpdate(Request $request)
	{
		$request->request->remove('_token'); // to remove property from $request
		$input = $request->all();

		foreach ($input as $key => $value) {

			$result = Settings::updateOrCreate(['option_name' => $key], [
				'option_name' => $key,
				'option_value' => $value,
			]);

			SettingsLang::updateOrCreate(['settings_id' => $result->id, 'lang' => getDefultAdminLanguage()], [
				'settings_id' => $result->id,
				'lang' => getDefultAdminLanguage(),
				'option_name' => $key,
				'option_value' => $value,
			]);
		}



		return back()->withInput(array('msg' => 'Setting Updated Successfully'));
	}
}
