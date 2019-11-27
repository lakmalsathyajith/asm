<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\FileInterface;
use App\Entities\Content;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\File\StoreFileRequest;
use App\Traits\FileTrait;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends AbstractController
{

    use FileTrait;

    private $disk = 'public';

    function __construct(
        FileInterface $fileRepoInstance
    )
    {
        $this->middleware('auth');

        $this->activeRepo = $fileRepoInstance;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['route'] = route('file.store');
        $data['action'] = 'Upload';
        $data['title'] = 'File Manager';
        $data['records'] = $this->activeRepo->all();
        $data['view'] = request()->get('view', 'detailed');

        return view('admin.pages.file.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['route'] = route('file.store');
        $data['title'] = 'File Manager';
        $data['action'] = 'Upload';
        return view('admin.pages.file.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFileRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileRequest $request)
    {
        try {
            $data = $this->getUploadedFileMeta();
            $data['user_id'] = Auth::id();

            $fileName = $data['uuid'] . '.' . $data['extension'];
            $relativePath = Storage::disk($this->disk)
                ->putFileAs(null, new File($data['path']), $fileName, 'public');
            $url = Storage::disk($this->disk)
                ->url($relativePath);

            $data['url'] = $url;
            $this->activeRepo->create($data);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        return redirect(route('file.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Content $content
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Content $content)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function update($id, Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $error = [];
        try {
            $model = \App\Entities\File::find($id);
            if (!$model->hasRelationship()) {
                return parent::destroy($id);
            }
            $error['message'] = "Can't delete the record since this option is already assigned. ".
                "Please remove the relationship before deleting this record";
        } catch (\Exception $e) {
            $error['message'] = $e->getMessage();
        }
        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'Something went wrong',
            null,
            [$error],
            200
        );
    }
}
