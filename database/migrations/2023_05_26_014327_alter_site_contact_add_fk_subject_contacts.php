<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class AlterSiteContactAddFkSubjectContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('site_contacts', function(Blueprint $table) {
            $table->unsignedBigInteger('subject_contact_id');
        });

        DB::statement('UPDATE site_contacts set subject_contact_id = subject');

        Schema::table('site_contacts', function(Blueprint $table) {
            $table->foreign('subject_contact_id')->references('id')->on('subject_contacts');
            $table->dropColumn('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('site_contacts', function(Blueprint $table) {
            $table->integer('subject');
            $table->dropForeign('site_contact_subject_contact_id');
        });

        DB::statement('UPDATE site_contacts set subject = subject_contact_id');

        Schema::table('site_contacts', function(Blueprint $table) {
            $table->dropColumn('site_contact_id');
        });
    }
}
