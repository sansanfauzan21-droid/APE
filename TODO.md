# TODO: Make File Upload Paths Flexible for Hosting

## Tasks
- [x] Update StoreFileHelper.php to use environment variables for path bases
- [x] Add default values for backward compatibility
- [x] Confirm upload features work on hosting (regulations docs, SBU photos, company docs)
- [ ] Run php artisan storage:link on hosting
- [ ] Verify paths work in different environments

## Notes
- Use env() with defaults like env('FILE_UPLOAD_IMG_BASE', 'img/')
- Ensure super admin uploads (photos, documents) are flexible
- All backend uploads use StoreFileHelper, now configurable
