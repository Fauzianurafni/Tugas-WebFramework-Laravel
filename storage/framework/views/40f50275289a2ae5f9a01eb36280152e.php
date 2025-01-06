

<?php $__env->startSection('content'); ?>
    <section class="container my-24 mx-auto">
        <form action="<?php echo e(route('movies.update', $movies->id)); ?>" method="POST"
            class="max-w-4xl mx-auto bg-blue-50 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 p-5">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Tambahkan method PUT untuk update -->

            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="<?php echo e(old('title', $movies->title)); ?>"
                    class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Year -->
            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                <input type="number" name="year" id="year" value="<?php echo e(old('year', $movies->year)); ?>"
                    class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    min="1900" max="<?php echo e(date('Y')); ?>" required>
                <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Genre -->
            <div class="mb-4">
                <label for="genre_id" class="block text-sm font-medium text-gray-700">Genre</label>
                <select name="genre_id" id="genre_id"
                    class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
                    <option value="" disabled <?php echo e(old('genre_id', $movies->genre_id) ? '' : 'selected'); ?>>Select Genre</option>
                    <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($genre->id); ?>" <?php echo e(old('genre_id', $movies->genre_id) == $genre->id ? 'selected' : ''); ?>>
                            <?php echo e($genre->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['genre_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Synopsis -->
            <div class="mb-4">
                <label for="synopsis" class="block text-sm font-medium text-gray-700">Synopsis</label>
                <textarea name="synopsis" id="synopsis" rows="4"
                    class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required><?php echo e(old('synopsis', $movies->synopsis)); ?></textarea>
                <?php $__errorArgs = ['synopsis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Available -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="available" id="available" value="1"
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                    <?php echo e(old('available', $movies->available) ? 'checked' : ''); ?>>
                <label for="available" class="ml-2 block text-sm text-gray-700">Available</label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center">
                Submit
            </button>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Tugas-WebFramework\resources\views/movies/edit.blade.php ENDPATH**/ ?>