<?php

namespace App\Enums;


enum  Functions: string
{
    const GET_COURSE_CATEGORIES = 'core_course_get_categories';
    const CREATE_COURSE_CATEGORIES = 'core_course_create_categories';
    const CREATE_COURSES = 'core_course_create_courses';
    const SEARCH_COURSES = 'core_course_search_courses';
    const GET_COURSES = 'core_course_get_courses';
    const GET_COURSES_BY_FIELD = 'core_course_get_courses_by_field';
    const CREATE_USERS = 'core_user_create_users';
    const SEARCH_COHORTS = 'core_cohort_search_cohorts';
    const CREATE_COHORTS = 'core_cohort_create_cohorts';
    const SEARCH_USERS = 'core_user_get_users_by_field';
    const COHORT_ADD_MEMBERS = 'core_cohort_add_cohort_members';
    const GET_COURSE_USERS = 'core_enrol_get_enrolled_users';
    const ENROLL_USER_COURSE = 'enrol_manual_enrol_users';
    const GET_COHORT_MEMBERS='core_cohort_get_cohort_members';
}
